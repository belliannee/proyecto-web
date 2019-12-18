<?php
session_start();
class LoginModel
{
    private $db;

    function __construct()
    {
        $this->db = Conexion::conectar();
    }

    public function iniciarSesion($correo,$password){

        if (isset($_POST['email']) && isset($_POST['password'])){

            $query = mysqli_query($this->db, "SELECT*FROM usuarios WHERE correo_electronico = '".$correo."' AND password= '".$password."'");
            $rows = mysqli_num_rows($query);

            if ($rows>0){
                
                $query2 = mysqli_query( $this->db, "SELECT idRoles FROM usuarios WHERE correo_electronico = '".$correo."' AND password= '".$password."'");
                $query2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
                $rol = $query2['idRoles'];

                if($rol==4)
                    header("Location: ?controller=MSAdministrativa&action=IndexSAP");
                elseif($rol==5)
                    header("Location: ?controller=MSAdministrativa&action=IndexSAP");
            }
            else{

            }
        }
    }
}
?>