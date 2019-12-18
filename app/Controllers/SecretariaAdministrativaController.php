<?php 
/**
* 
*/
ob_start();
require_once('Models/SecretariaAdministrativaModel.php');

class SecretariaAdministrativaController
{

	function __construct()
	{

	}
	function IndexSA(){
		require_once('Views/SecretariaAdministrativa/IndexSA.php');

	}

	function crearUsuario(){
		//require_once('Views/SecretariaAdministrativa/IndexSA.php');

		$nombre = $_POST['name'];
		$apellido = $_POST['lastname'];
		$cedula = $_POST['cedula'];
		$direccion = $_POST['direccion'];
		$email = $_POST['correo_electronico'];
		$password = $_POST['password'];
		$telefono = $_POST['telefono'];
		$rol = $_POST['rol'];
		
		$agregar = new SecretariaAdministrativaModel();
		$datos = $agregar->crearUsuario($nombre,$apellido,$cedula,$direccion,$email,$password,$telefono,$rol);
		
		if($datos===true){
			header("location:?controller=PrincipalHome&&action=exito");
		}
		else{
			header("location:?controller=PrincipalHome&&action=index");
		}
	}

}
