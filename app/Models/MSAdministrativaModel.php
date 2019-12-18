<?php
class MSAdministrativaModel{
    private $db;
    private $msadministrativa;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->msadministrativa = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from solicitud_reporte;");
        while($registros = $consulta->fetch_assoc()){
            $this->msadministrativa[] = $registros;
        }
        return $this->msadministrativa;
    }
    public function agregarF($nombre,$apellido,$cedula,$email,$date,$tipo,$descripcion,$edificio,$planta,$area,$salon){
        $insertar = "INSERT INTO solicitud_reporte (nombre_db, apellido_db, cedula_db, correo_electronico, date_reporte, tipo_dano, descripcion_dano, ubi_edificio, ubi_planta, ubi_area, ubi_numsalon)
		VALUES ('$nombre','$apellido','$cedula','$email','$date','$tipo','$descripcion','$edificio','$planta','$area','$salon');";

        $resultado = $this->db->query($insertar);
        

        if($resultado===true){
            return $datos = true;
        }
        else{
            return $datos = false;
        }

		/* if (!$resultado) {
				$mensaje  = 'Inserción no válida: ' . mysql_error() . "\n";
				$mensaje .= 'Inserción completa: ' . $insertar;
				die($mensaje);
			}
			else{
				$mensaje  = 'Inserción Exitosa uwu';
        }
        return $mensaje; */
    }
    public function listarU(){
        $consulta = $this->db->query("select * from usuarios;");
        while($registros = $consulta->fetch_assoc()){
            $this->msadministrativa[] = $registros;
        }
        return $this->msadministrativa;
    }
}
?>