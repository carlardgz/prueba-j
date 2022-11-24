pipeline {

  environment {
    dockerimagename = "carlarodriguezag/prueba-j"
    dockerImage = ''
  }

  agent any

  stages {

    stage('Checkout Source') {
      steps {
	git credentialsId: 'demo_github', url: 'https://github.com/carlardgz/prueba-j.git', branch: 'main'	
      }
    }

    stage('Build image') {
      steps {
        script {
          dockerImage = docker.build dockerimagename
        }
      }
    }

    stage('Pushing Image') {
      environment {
               registryCredential = 'demo_dockerhub'
           }
      steps{
        script {
          docker.withRegistry( 'https://registry.hub.docker.com', registryCredential ) {
            dockerImage.push("latest")
          }
        }
      }
    }

    stage('Deploying App to Kubernetes') {
      steps {
	script {
           kubernetesDeploy(configs: "deployment-service-simplesaml.yaml", kubeconfigId: "kuberhaep")
          }
         }
        }
   stage('Restarting POD') {
      steps {
          sshagent(['kubernetessh']) {
           sh "scp -o StrictHostKeyChecking=no deployment-service-simplesaml.yaml digesetuser@148.213.5.79:/home/digesetuser"    
        script {
            try{
                sh 'ssh digesetuser@148.213.5.79 microk8s.kubectl rollout restart deployment prueba-j --kubeconfig=/home/digesetuser/.kube/config'
              }catch(error){
         }
	}
      }
    }
  }
 }
}
