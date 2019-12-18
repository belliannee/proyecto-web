<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Crear usuario </title>

    <!-- CSS de Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../resources/css/formbasic.css" rel="stylesheet">

</head>

<body class="bg-light">
<div class="container">
<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="../../resources/images/utp.jpg" alt="" width="72" height="72">
  <h2>Agregar usuario de secretaria al sistema</h2>

<form action="?controller=SecretariaAdministrativa&action=crearUsuario" method="POST" class="needs-validation form_basic_style" novalidate>
  <div class="container">
<h4 class="mb-3">Datos</h4>
  <div class="row">
    <div class="col-md-6">
      <input type="text" class="form-control" name="name" placeholder="Nombre" required/>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="lastname" placeholder="Apellido" required/>
    </div>
  </div>
  <br/>
  <div class="row">
  <div class="col-md-4">
    <input type="text" class="form-control" placeholder="Cedula" name="cedula" required/>
  </div>
</div>
<br/>
<div class="form-group">
  <label for="formGroupExampleInput">Direccion</label>
  <input type="text" class="form-control" maxlength="45" name="direccion" required/>
</div>
<br/>
<div class="form-group">
  <label for="exampleFormControlInput1">Correo Electronico</label>
  <input type="email" class="form-control" name="correo_electronico" placeholder="nombre.apellido@utp.ac.pa" required/>
</div>
<br/>
<div class="form-group">
  <label for="formGroupExampleInput">Contraseña</label>
  <input type="password" class="form-control" placeholder="password" name="password" required/>
</div>
<br/>
<div class="form-group">
  <label for="formGroupExampleInput">Telefono</label>
  <input type="number" class="form-control" placeholder="telefono celular, sin guiones" min=60000000 max=69999999 name="telefono" required/>
</div>
<br/>
<h4 class="mb-3">Rol</h4>
  <div class="container">
    <div class="form-group">
      <select name="rol" class="form-control" required>
        <option selected>Secretaria Administrativa Principal</option>
        <option>Secretaria Administrativa</option>
      </select>
    </div>
</div>
<div class="container-login100-form-btn">
	<button type="submit" class="btn btn-primary">
	Crear usuario
	</button>
</div>
<br><br>
<div class="text-center p-t-12">
	<a class="btn btn-primary" href="/?controller=PrincipalHome&action=index"> Volver</a>
</div>
</form>
<br/>
</body>
</html>