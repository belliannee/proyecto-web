<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <h2 class="mt-2">Administrativos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID Reporte</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Correo Electronico & Fecha del Reporte</th>
                    <th>Descripcion del Reporte</th>
                    <th>Tipo de Daño</th>
                    <th>ID Usuario</th>
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
                        <td><?php echo $dato["idformulario_reporte"] ?></td>
                        <td><?php echo $dato["cedula_db"] ?></td>
                        <td><?php echo $dato["nombre_db"] . ' ' . $dato["apellido_db"] ?></td>
                        <td><?php echo $dato["correo_electronico"] . ' ' . $dato["date_reporte"] ?></td>
                        <td><?php echo $dato["descripcion_dano"] ?></td>
                        <td><?php echo $dato["tipo_dano"] ?></td>
                        <td><?php echo $dato["idusuarios"] ?></td>
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