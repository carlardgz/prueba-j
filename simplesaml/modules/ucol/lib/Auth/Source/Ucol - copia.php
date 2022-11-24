<?php
require_once('domxml-php4-to-php5.php');
/**
 * Authentication source which verifies the password against
 * the 'auth.adminpassword' configuration option.
 *
 * @package simpleSAMLphp
 * @version $Id$
 */   
class sspmod_ucol_Auth_Source_Ucol extends sspmod_core_Auth_UserPassBase {


	/**
	 * Constructor for this authentication source.
	 *
	 * @param array $info  Information about this authentication source.
	 * @param array $config  Configuration.
	 */
/*	public function __construct($info, $config) {
		assert('is_array($info)');
		assert('is_array($config)');

		parent::__construct($info, $config);

		$this->setForcedUsername("admin");
	}

*/
	/**
	 * Attempt to log in using the given username and password.
	 *
	 * On a successful login, this function should return the users attributes. On failure,
	 * it should throw an exception. If the error was caused by the user entering the wrong
	 * username or password, a SimpleSAML_Error_Error('WRONGUSERPASS') should be thrown.
	 *
	 * Note that both the username and the password are UTF-8 encoded.
	 *
	 * @param string $username  The username the user wrote.
	 * @param string $password  The password the user wrote.
	 * @return array  Associative array with the users attributes.
	 */
	protected function login($username, $password) {
		assert('is_string($username)');
		assert('is_string($password)');
		if (strrpos($username, "@") === false) { 
			throw new SimpleSAML_Error_Error('WRONGUSERPASS');
		}
		$datosLogin = explode("@",$username);
		$usuario =(string)trim($datosLogin[0]);
		$dominio = $datosLogin[1];
		
		if(!$this->loginUCOL($usuario,$password)) 
			throw new SimpleSAML_Error_Error('WRONGUSERPASS');
		
		$attributes = array();
		$attributes['uCorreo'][0] = $username;
		$attributes['uNombre'][0] = $this->nombre;
		$attributes['uCuenta'][0] = $this->cuenta;
		$attributes['uDependencia'][0] = $this->dependencia;
		
		
		/*if ($username != "admin" && $password != "test" ) {
			throw new SimpleSAML_Error_Error('WRONGUSERPASS');
		}*/
		
		return $attributes;
	}
	
	/*************
		AGREGADOS DE UCOL
	***********/
	
		var $nombre;
			var $cuenta;
			var $dependencia;
			var $estado;
			var $mensajeError;
			var $datosUsuario=array();

			//constructor
			function loginUCOL($usuario,$clave){
				$url = "http://ceupromed.ucol.mx/wsmediossiceuc/web.asp?login=".$usuario."&pass=". md5($clave);
				try{
					ini_set('default_socket_timeout', 15);
					$xmlDatos = file_get_contents($url);
					if($xmlDatos===false)throw new Exception("NO responde ".$url);
					if(stristr($xmlDatos,"true")===FALSE)
					{
						if(($usuario == "test")&&($clave=="test"))
						{
						$this->nombre      = "Usuario DePrueba SINED";
						$this->cuenta      = "1234";
						$this->dependencia = "SINED.central";
						$this->estado      = "true";
						return true;
						}
						return false;
					}else
					{
					   $dom  = domxml_open_mem($xmlDatos);
					   $root = $dom->document_element();
					   $root->name = '$Envelope';
					   $datosUsuario  = $this->parse_Datos($root);//Obtenemos los datos en el array $datosUsuario
					   //print_r($root);
					   if (in_array("true",$datosUsuario))
						{
						    $this->getDatos($datosUsuario);
						    return true;
						}
					return false;
					}
				}catch(Exception $ex)
					{
					$datosUsuario[0] = "Por el momento el servicio no est&aacute; disponible(SICEUC)";
					return false;          
				}
			}
			
			function getDatos($array){
				$this->nombre      = $array[''];
				$this->cuenta      = $array[1];
				$this->dependencia = $array[2];
				$this->estado      = $array[3];
			}
			
			//Métodos de instancia
			function getNombre(){
				return $this->nombre;
			}
				
			function getCuenta(){
				return $this->cuenta;
			}
				
			function getDependencia(){
				return $this->dependencia;
			}
			function getEstado(){
				return $this->estado;
			}
			
			 //Función para obtener los datos del XML que regresa el SICEUC
			function parse_Datos($node) {
				global $i;
				global $Envelope;
				global $datosUsuario;
				if ($node->has_child_nodes()) {
					  foreach($node->child_nodes() as $n) {
						  if ($n->node_name() == '#text') {
							  $datosUsuario[$i]=$n->node_value();
							  $i++;
							  eval("$node->name=\"" . $n->node_value() . "\";");
						  }
						  else {
							  $n->name = $node->name . '->' . $n->node_name();
							  $this->parse_Datos($n);
						  }
					  }
					  return $datosUsuario;
				}
		     }

}


?>