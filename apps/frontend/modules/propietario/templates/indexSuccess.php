<h1>Listado de Propietarios</h1>

<table class="table">
    <thead>
        <tr>
            <th>Propietario</th>
            <th>Cédula</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($propietarios as $propietario): ?>
            <tr>
                <td class="td"><a href="<?php echo url_for('propietario/show?id=' . $propietario->getId()) ?>"><?php echo $propietario ?></a></td>
                <td class="td"><?php echo $propietario->getCedula() ?></td>
                <td class="td"><?php echo $propietario->getTelefono() ?></td>
                <td class="td"><?php echo $propietario->getTelefonoMovil() ?></td>
                <td class="td"><?php echo $propietario->getSexo() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
