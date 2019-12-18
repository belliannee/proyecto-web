<?php
class MSAdministrativaModel{
    private $db;
 
    public function __construct(){
        $this->db = Conexion::conectar();
    }

    public function crearUsuario($nombre,$apellido,$cedula,$direccion,$email,$password,$telefono,$rol){
        
        if($rol=='Secretaria Administrativa Principal')
            $rol2 = 4;
        elseif($rol=='Secretaria Administrativa')
            $rol2 = 5;

        $insertar = "INSERT INTO usuarios (nombre, apellido, cedula, direccion, correo_electronico, 'password', telefono, idRoles)
		VALUES ('$nombre','$apellido','$cedula','$direccion','$email','$password',$telefono,$rol2)";

		$this->db->query($insertar);
        
    }
}
?>