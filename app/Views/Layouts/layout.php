<!DOCTYPE html>
<html lang="es">

<head>
    <title>Secretaría Administrativa - FISC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS de Bootstrap -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/css/dashboard.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../resources/css/acerca.css" rel="stylesheet">
</head>

<body>
<header>
    <?php require('menu.php'); ?>
</header>
<div class="container-fluid">
    <div class="row">
        <?php require_once('routes.php'); ?>
    </div>
</div>

</body>

</html>