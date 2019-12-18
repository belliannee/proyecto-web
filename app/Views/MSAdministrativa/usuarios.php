<main role="main" class="col-md-12 ml-sm-auto col-lg-11 px-4">

    <h2 class="mt-2" align="center"> Listado de usuarios </h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Direccion</th>
                    <th>Correo Electronico </th>
                    <th>Telefono</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["nombre"] . ' ' . $dato["apellido"] ?></td>
                        <td><?php echo $dato["cedula"] ?></td>
                        <td><?php echo $dato["direccion"] ?></td>
                        <td><?php echo $dato["correo_electronico"]?></td>
                        <td><?php echo $dato["telefono"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</main>