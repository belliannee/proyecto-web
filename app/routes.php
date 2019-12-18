<?php


$controllers = array(
    'PrincipalHome' => ['index', 'acerca', 'contacto','form','login', 'exito'],
    'SecretariaAdministrativa' => ['IndexSA'],
    'MSAdministrativa' => ['IndexSAP', 'formulario'],
    'Login' => ['login']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('PrincipalHome', 'index');
    }
} else {
    call('PrincipalHome', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'PrincipalHome':
            $controller = new PrincipalHomeController();
            break;
        case 'MSAdministrativa':
            $controller = new MSAdministrativaController();
            break;
        case 'SecretariaAdministrativa':
            $controller = new SecretariaAdministrativaController();
            break;
        case 'Mantenimiento':
            $controller = new MantenimientoController();
            break;
        case 'Login':
            $controller = new LoginController();
            break;
        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>