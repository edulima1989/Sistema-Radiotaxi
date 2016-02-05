<h1>Descripción del Codigo <?php echo $codigo->getNumero() ?></h1>
<div class="table_show">
    <table>
        <tbody>
            <tr>
                <th>Cliente:</th>
                <td><?php echo $codigo->getNombreCliente() ?></td>
            </tr>
            <tr>
                <th>Número:</th>
                <td><?php echo $codigo->getNumero() ?></td>
            </tr>
            <tr>
                <th>Barrio:</th>
                <td><?php echo $codigo->getSector()->getNombre() ?></td>
            </tr>
            <tr>
                <th>Calle Principal:</th>
                <td><?php echo $codigo->getCalle1() ?></td>
            </tr>
            <tr>
                <th>Calle Secundaria:</th>
                <td><?php echo $codigo->getCalle2() ?></td>
            </tr>
            <tr>
                <th>Número de  casa:</th>
                <td><?php echo $codigo->getNumCasa() ?></td>
            </tr>
            <tr>
                <th>Referencia:</th>
                <td><?php echo $codigo->getObservacion() ?></td>
            </tr>
        </tbody>
    </table>
    <hr />

    <a href="javascript:history.back(-1)">Regresar</a>
    <?php if (count($carreras) === 0 && count($reservaciones) === 0): ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo link_to('Eliminar', 'codigo/delete?id=' . $codigo->getId(), array('method' => 'delete', 'confirm' => '¿Está seguro de eliminar el codigo?')) ?>
        <?php endIf; ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo url_for('codigo/edit?id=' . $codigo->getId()) ?>">Editar</a>
</div>

