<?php
    require_once('config.php');
	require_once('ConexionMySQL.php');
	
    $as = new SimpleSAML_Auth_Simple($saml_source);   

	if(isset($_GET["logout"])) 
		$as->logout("http://wayf.ucol.mx/servicios/");

	if(isset($_GET["login"])) 
		$as->requireAuth();
	$lib= new HelperMySql($host,$user,$pass,"consentimiento");
	echo "<center><h1>SERVICIOS UCOL</h1></center><br>";
	
	if ($as ->isAuthenticated())
		{ 	$atributos = $as->getAttributes();
			echo "<br>Bienvenido ".$atributos["uNombre"][0];
			$email=$atributos["uCorreo"][0];

			$lib->query("select * from misservicios where email='$email'");
			$cont=0;
			echo "<br>Servicios a los que ha ingresado:<br>";
			while($row=$lib->fetch())
			  {echo "<br><br><a target='_blank' href='".$row["ruta"]."'>".$row["descripcion"]."</a>";
			   $cont++;
			  }
			if(!$cont) echo "No ha ingresado a ningun servicio";
			 echo "<br><br><a href='?logout'>Cerrar sesion</a>";
		} 
	else
		{ echo "No ha iniciado sesion<br><a href='?login'>Iniciar sesion</a>";
		 }
		echo "<hr>Servicios a los que puede ingresar<br>";
		$lib->query("select * from servicios");
		$cont=0;
		while($row=$lib->fetch())
		  {echo "<br><br><a target='_blank' href='".$row["ruta"]."'>".$row["descripcion"]."</a>";
		   $cont++;
		 }
?>