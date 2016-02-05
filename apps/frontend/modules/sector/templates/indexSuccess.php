<h1>Listado de Sectores</h1>

<table class="table">
    <thead>
        <tr>
            <th class="th">N°</th>
            <th class="th">Nombre</th>
            <th class="th">Latitud</th>
            <th class="th">Longitud</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sectors as $i => $sector): ?>
            <tr>
                <td class="td"><?php echo ($i+1) ?></td>
                <td class="td"><a href="<?php echo url_for('sector/show?id=' . $sector->getId()) ?>"><?php echo $sector->getNombre() ?></a></td>
                <td class="td"><?php echo $sector->getLatitud() ?></td>
                <td class="td"><?php echo $sector->getLongitud() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="table_show">
<hr />
<a href="<?php echo url_for('sector/new') ?>">Nuevo Sector</a>
</div>
