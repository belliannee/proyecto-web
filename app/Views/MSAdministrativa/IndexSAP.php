<main role="main" class="col-md-12 ml-sm-auto col-lg-11 px-4">

    <h2 class="mt-2" align="center"> Listado de reportes </h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Correo Electronico </th>
                    <th>Fecha del Reporte</th>
                    <th>Descripcion del Reporte</th>
                    <th>Tipo de Daño</th>
                    <th>Edificio</th>
                    <th>Planta</th>
                    <th>Area</th>
                    <th>Numero del Salon</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["nombre_db"] . ' ' . $dato["apellido_db"] ?></td>
                        <td><?php echo $dato["cedula_db"] ?></td>
                        <td><?php echo $dato["correo_electronico"]?></td>
                        <td><?php echo $dato["date_reporte"] ?></td>
                        <td><?php echo $dato["descripcion_dano"] ?></td>
                        <td><?php echo $dato["tipo_dano"] ?></td>
                        <td><?php echo $dato["ubi_edificio"] ?></td>
                        <td><?php echo $dato["ubi_planta"] ?></td>
                        <td><?php echo $dato["ubi_area"] ?></td>
                        <td><?php echo $dato["ubi_numsalon"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</main>