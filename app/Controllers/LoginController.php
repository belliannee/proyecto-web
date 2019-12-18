<?php
/* session_start();*/
require_once('Models/LoginModel.php');
 
class LoginController
{

	function __construct()
	{

	}

	function login(){
	//	$login = new MSAdministrativaModel();
    //  $datos = $msadministrativa->listar();
        require_once('Views/Login/index.php'); 

        $correo = $_POST['email'];
        $password = $_POST['password'];
        $_SESSION['email']=$_POST['email'];
        
        $loggear = new LoginModel();
        $loggear-> iniciarSesion($correo, $password);

	}

}
