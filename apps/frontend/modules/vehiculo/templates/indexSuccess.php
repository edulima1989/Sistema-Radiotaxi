<h1>Listado de Unidades</h1>

<table class="table">
    <thead>
        <tr>
            <th>N° de Unidad</th>
            <th>Propietario</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vehiculos as $vehiculo): ?>
            <tr>
                <td class="td"><a  href="<?php echo url_for('vehiculo/show?id=' . $vehiculo->getId()) ?>"><?php echo $vehiculo ?></a></td>
                <td class="td"><?php echo $vehiculo->getPropietario() ?></td>
                <td class="td"><?php echo $vehiculo->getPlaca() ?></td>
                <td class="td"><?php echo $vehiculo->getMarca() ?></td>
                <td class="td"><?php echo $vehiculo->getModelo() ?></td>
                <td class="td"><?php echo $vehiculo->getAno() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>