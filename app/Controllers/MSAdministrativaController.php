<?php 
/**
* 
*/
ob_start();
require_once('Models/MSAdministrativaModel.php');

class MSAdministrativaController
{
	private $con;

	function __construct()
	{
		$this->con=Conexion::conectar();
	}

	function IndexSAP(){
		$msadministrativa = new MSAdministrativaModel();
		$datos = $msadministrativa->listar();
		require_once('Views/MSAdministrativa/IndexSAP.php');
	}

	function formulario(){

	//	require_once("Views/Forms/formbasic.php");

		//datos
		$nombre = $_POST['nombre_db'];
		$apellido = $_POST['apellido_db'];
		$cedula = $_POST['cedula_db'];
		$email = $_POST['correo_electronico'];
		$date = $_POST['date_reporte'];
		$tipo = $_POST['tipo_dano'];
		$descripcion = $_POST['descripcion_dano'];
		$edificio = $_POST['ubi_edificio'];
		$planta = $_POST['ubi_planta'];
		$area = $_POST['ubi_area'];
		$salon = $_POST['ubi_numsalon'];

		
		$agregar = new MSAdministrativaModel();
		$datos = $agregar->agregarF($nombre,$apellido,$cedula,$email,$date,$tipo,$descripcion,$edificio,$planta,$area,$salon);
		
		if($datos===true){
			header("location:?controller=PrincipalHome&&action=exito");
		}
		else{
			header("location:?controller=PrincipalHome&&action=index");
		}
	}

	function usuarios(){
		$msadministrativa = new MSAdministrativaModel();
		$datos = $msadministrativa->listarU();
		require_once('Views/MSAdministrativa/usuarios.php');
	}

}