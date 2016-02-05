<h1>Sector "<?php echo $sector->getNombre() ?>"</h1>
<div class="table_show">
    <table>
        <tbody>
            <tr>
                <th>Nombre:</th>
                <td><?php echo $sector->getNombre() ?></td>
            </tr>
            <tr>
                <th>Latitud:</th>
                <td><?php echo $sector->getLatitud() ?></td>
            </tr>
            <tr>
                <th>Longitud:</th>
                <td><?php echo $sector->getLongitud() ?></td>
            </tr>
        </tbody>
    </table>

    <hr />

    <a href="<?php echo url_for('sector/edit?id=' . $sector->getId()) ?>">Editar</a>
    &nbsp;
    <a href="<?php echo url_for('sector/index') ?>">Ir al listado</a>
</div>