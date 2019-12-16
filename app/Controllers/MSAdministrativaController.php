<?php 
/**
* 
*/
require_once('Models/MSAdministrativaModel.php');

class MSAdministrativaController
{

	function __construct()
	{

	}

	function IndexSAP(){
		$msadministrativa = new MSAdministrativaModel();
		$datos = $msadministrativa->listar();
		require_once('Views/MSAdministrativa/IndexSAP.php');
	}

}
