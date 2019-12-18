<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>

    <!-- CSS de Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../resources/css/formbasic.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="../../resources/images/utp.jpg" alt="" width="72" height="72">
  <h2>Solicitud de Mantenimiento General</h2>
  <p class="lead">Este es el formulario de solicitud de mantenimiento para reparaciones generales.</p>
</div>

<form action="?controller=MSAdministrativa&action=formulario" method="POST" class="needs-validation form_basic_style" novalidate>
  <div class="container">
<h4 class="mb-3">Datos Personales</h4>
  <div class="row">
    <div class="col-md-6">
      <input type="text" class="form-control" id="nombre_db" placeholder="Nombre" required/>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="apellido_db" placeholder="Apellido" required/>
    </div>
  </div>
  <br/>
  <div class="row">
  <div class="col-md-4">
    <input type="text" class="form-control" placeholder="Cedula" id="cedula_db" required/>
  </div>
</div>
<br/>
<div class="form-group">
  <label for="exampleFormControlInput1">Correo Electronico</label>
  <input type="email" class="form-control" id="correo_electronico" placeholder="nombre.apellido@utp.ac.pa" required/>
</div>
<br/>
<div class="form-group">
  <label for="formGroupExampleInput">Fecha de Reporte</label>
  <input type="date" class="form-control" value="yyyy-mm-dd" id="date_reporte" required/>
</div>
</div>
<br/>


<h4 class="mb-3">Tipo de Daño</h4>

<div class="container">
  <div class="row">

      <div class="form-group col-sm-4">
          <select id="tipo_dano" class="form-control" required>
            <option selected>Tipo de Daño</option>
            <option>infraestructura</option>
            <option>Aire Acondicionado</option>
            <option>Electricidad</option>
            <option>Equipo Tecnologicos</option>
            <option>Instalaciones Sanitarias</option>
          </select>
        </div>
                </div>
             </div>
<br/>
<h4 class="mb-3">Descripción del Problema</h4>
<div class="container">
    <div class="form-group">
        <textarea class="form-control" id="descripcion_dano" rows="3" maxlength="45"></textarea>
        </div>
      </div>
<br/>
  <h4 class="mb-3">Ubicación</h4>
  <div class="container">
    <div class="form-group">
      <select id="ubi_edficio" class="form-control" required>
        <option selected>Edificio</option>
        <option>Edificio 1</option>
        <option>Edificio 3</option>
        <option>Postgrado</option>
        <option>Edificio Administrativo</option>
      </select>
    </div>

    <div class="form-group">
      <select id="ubi_planta" class="form-control" required>
        <option selected>Planta</option>
        <option>Planta Baja</option>
        <option>Piso 1</option>
        <option>Piso 2</option>
        <option>Piso 3</option>
      </select>
    </div>

    <div class="form-group">
        <select id="ubi_area" class="form-control" required>
          <option selected>Area</option>
          <option>Salon de Clase</option>
          <option>Laboratorio</option>
          <option>Cafeteria</option>
          <option>Oficina</option>
        </select>
      </div>
          
                      <br/>
                    <div class="form-group">
                        <select id="ubi_numsalon" class="form-control" required>
                          <option selected>Numero de Salon</option>
                          <option>3-231</option>
                          <option>3-212</option>
                          <option>3-213</option>
                          <option>3-123</option>
                        </select>
                      </div>
  </div>

  <br/>
<!--   <br/>
  <h4 class="mb-3">Pre-elaboración</h4>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" id="tecnicofi" placeholder="Técnico Asignado 1" required/> 
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" id="tecnicose" placeholder="Técnico Asignado 2" required/>
      </div>
    </div>

  <br/>
    <div class="row">
      <div class="col-md-6">
        <label for="formGroupExampleInput">Inspección efectuada por:</label>
        <input type="text" class="form-control" id="nombre_inspec" placeholder="Nombre" required/>
      </div>
    </div>
<br/>
    <div class="row">
      <div class="col-md-6">
        <label for="formGroupExampleInput">Fecha de Inspección</label>
        <input type="date" class="form-control" id="date_inspec" required/>
      </div>
    </div>
  </div>
  <br/>
  <br/>
  <h4 class="mb-3">Materiales a Utilizar</h4>
  <div>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
          /**
           * Funcion para añadir una nueva columna en la tabla
           */
          $("#add").click(function(){
              // Obtenemos el numero de filas (td) que tiene la primera columna
              // (tr) del id "tabla"
              var tds=$("#tabla tr:first td").length;
              // Obtenemos el total de columnas (tr) del id "tabla"
              var trs=$("#tabla tr").length;
              var nuevaFila="<tr>";
              for(var i=0;i<tds;i++){
                  // añadimos las columnas
                  nuevaFila+="<td>columna "+(i+1)+" Añadida con jquery</td>";
              }
              $("#tabla").append(nuevaFila);
          });
   
          /**
           * Funcion para eliminar la ultima columna de la tabla.
           * Si unicamente queda una columna, esta no sera eliminada
           */
          $("#del").click(function(){
              // Obtenemos el total de columnas (tr) del id "tabla"
              var trs=$("#tabla tr").length;
              if(trs>1)
              {
                  // Eliminamos la ultima columna
                  $("#tabla tr:last").remove();
              }
          });
      });
      </script>
      <input type="button" id="add" value="Añadir una fila">
      <input type="button" id="del" value="Eliminar una fila">
      <p>
          <table id="tabla" border=1>
              <tr>
                  <td>Material(es)</td>
                  <td>Unidad</td>
                  <td>Cantidad</td>
              </tr>
          </table>
      </p>
  </div> -->
        <br/>
        <div class="row" style="margin-left:40%">
          <input type="submit" value="Enviar"  onclick="confirm('<? echo 'Desea enviar los datos?' ?>')" class="btn btn-primary">
          <a class="btn btn-primary" href="/?controller=PrincipalHome&action=index" style="margin-left:5%">Volver</a>

        </div>
 
</form>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
      <script src="http://code.jquery.com/jquery.js"></script>

      <!-- Todos los plugins JavaScript de Bootstrap -->
      <script src="../../bootstrap/js/bootstrap.min.js"></script>
    </body>
  </html>