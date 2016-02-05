<h1>Descripción de Propietario [<?php echo $propietario ?>]</h1>
<div class="table_show">
<table>
    <tbody>
        <tr>
            <th>Cedula:</th>
            <td><?php echo $propietario->getCedula() ?></td>
        </tr>
        <tr>
            <th>Apellido:</th>
            <td><?php echo $propietario->getLastName() ?></td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td><?php echo $propietario->getFirstName() ?></td>
        </tr>
        <tr>
            <th>Licencia:</th>
            <td><?php echo $propietario->getLicencia() ?></td>
        </tr>
        <tr>
            <th>Telefono:</th>
            <td><?php echo $propietario->getTelefono() ?></td>
        </tr>
        <tr>
            <th>Celular:</th>
            <td><?php echo $propietario->getTelefonoMovil() ?></td>
        </tr>
        <tr>
            <th>Sexo:</th>
            <td><?php echo $propietario->getSexo() ?></td>
        </tr>
    </tbody>
</table>

<hr />

<!--<a href="<?php // echo url_for('propietario/edit?id=' . $propietario->getId()) ?>">Editar</a>-->
&nbsp;
<a href="<?php echo url_for('propietario/index') ?>">Regresar al Listado</a>
&nbsp;
<!--<a href="<?php // echo url_for('vehiculo/new?id=' . $propietario->getId()) ?>">Crear Vehiculo</a>-->
</div>
<h1>Listado de Unidades</h1>

<table class="table">
    <thead>
        <tr>
            <th class="th">N° de Unidad</th>
            <th class="th">Placa</th>
            <th class="th">Marca</th>
            <th class="th">Modelo</th>
            <th class="th">Año</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vehiculos as $vehiculo): ?>
                <tr>
                    <td class="td"><a href="<?php echo url_for('vehiculo/show?id=' . $vehiculo->getId()) ?>"><?php echo $vehiculo ?></a></td>
                    <td class="td"><?php echo $vehiculo->getPlaca() ?></td>
                    <td class="td"><?php echo $vehiculo->getMarca() ?></td>
                    <td class="td"><?php echo $vehiculo->getModelo() ?></td>
                    <td class="td"><?php echo $vehiculo->getAno() ?></td>
                </tr>
        <?php endforeach; ?>
    </tbody>
</table>
