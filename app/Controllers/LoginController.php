<?php
session_start();
require_once ('Models/LoginModel.php');
require_once ('index.php');

class LoginController
{

	function __construct()
	{

	}

	function login(){
	//	$login = new MSAdministrativaModel();
    //  $datos = $msadministrativa->listar();
        require_once('Views/Login/index.html'); 

        $correo = $_POST['email'];
        $password = $_POST['password'];

        $conexion = db::conectar(); 
        $consulta1 = $conexion->prepare('select*from usuarios where correo_electronico:=correo_electronico');   
        $consulta1->bindValue('correo_electronico',$correo);
        $consulta1->execute();

        $registro=$consulta1->fecth();

        if (password_verify($password, $registro['password'])) {
            
            require_once('Views/Login/contacto.html');  //?????
            echo "que chucha ???????????";
        }	

	}

}
