<h1>Datos del Cliente <?php echo $cliente ?></h1>
<div class="table_show">
    <table>
        <tbody>
            <tr>
                <th>Apellido:</th>
                <td><?php echo $cliente->getLastName() ?></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><?php echo $cliente->getFirstName() ?></td>
            </tr>
            <tr>
                <th>Telefono:</th>
                <td><?php echo $cliente->getTelefono() ?></td>
            </tr>
            <tr>
                <th>Celular:</th>
                <td><?php echo $cliente->getTelefonoMovil() ?></td>
            </tr>
            <tr>
                <th>Sexo:</th>
                <td><?php echo $cliente->getSexo() == 'F' ? 'Femenino' : 'Masculino' ?></td>
            </tr>
        </tbody>
    </table>

    <hr />
    <a href="<?php echo url_for('cliente/index') ?>">Volver al Listado</a>
    &nbsp; &nbsp;&nbsp;
    <a href="<?php echo url_for('cliente/edit?id=' . $cliente->getId()) ?>">Editar</a>
    <?php if (count($codigos) === 0): ?>
        &nbsp; &nbsp;&nbsp;
        <?php echo link_to('Eliminar', 'cliente/delete?id=' . $cliente->getId(), array('method' => 'delete', 'confirm' => '¿Está seguro de querer eliminar el cliente?')) ?>
        <?php endIf; ?>
    &nbsp; &nbsp;&nbsp;
    <a href="<?php echo url_for('codigo/new?id=' . $cliente->getId()) ?>">Crear Código</a>

</div>
<h1>Listado de Codigos</h1>

<table class="table">
    <thead>
        <tr>
            <th class="th">Código</th>
            <th class="th">Barrio</th>
            <th class="th">Calle Principal</th>
            <th class="th">Calle Secundaria</th>
            <th class="th">N° casa</th>
            <th class="th">Referencia</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($codigos as $codigo): ?>
            <tr>
                <td class="td"><a  href="<?php echo url_for('codigo/show?id=' . $codigo->getId()) ?>"><?php echo $codigo->getNumero() ?></a></td>
                <td class="td"><?php echo $codigo->getSector()->getNombre() ?></td>
                <td class="td"><?php echo $codigo->getCalle1() ?></td>
                <td class="td"><?php echo $codigo->getCalle2() ?></td>
                <td class="td"><?php echo $codigo->getNumCasa() ?></td>
                <td class="td"><?php echo $codigo->getObservacion() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
