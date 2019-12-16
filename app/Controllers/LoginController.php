<?php 
/**
* 
*/
//require_once('Models/MSAdministrativaModel.php');

class LoginController
{

	function __construct()
	{

	}

	function login(){
	//	$login = new MSAdministrativaModel();
    //  $datos = $msadministrativa->listar();
        

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
        
        
        //require_once('Views/Login/index.html');  //?????
	}

}
