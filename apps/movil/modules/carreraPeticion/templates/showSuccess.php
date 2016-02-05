<h1>Carrera Solicitada</h1>
<table class="table_show">
    <tbody>
        <tr>
            <th>Código:</th>
            <td><?php echo $solicitud_carrera->getCodigo() ?></td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td><?php echo strtoupper($solicitud_carrera->getEstado()) ?></td>
        </tr>
        <tr>
            <th>Tiempo:</th>
            <td><?php echo $solicitud_carrera->getTiempo() . ' minutos' ?></td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td><?php echo $solicitud_carrera->getFecha() ?></td>
        </tr>
        <tr>
            <th>Hora:</th>
            <td><?php echo $solicitud_carrera->getHora() ?></td>
        </tr>
    </tbody>                          
</table>

<a class="link_show" href="<?php echo url_for('carreraPeticion/index') ?>">Regresar al listado</a>
<?php if ($solicitud_carrera->getEstado() == 'cancelada'): ?>
    <?php echo link_to('Eliminar', 'carreraPeticion/delete?id=' . $solicitud_carrera->getId(), array('class' => 'link_show', 'method' => 'delete', 'confirm' => '¿Realmente desea eliminar la solicitud de carrera?')) ?>
<?php elseif ($solicitud_carrera->getEstado() == 'rechazada'): ?>
    <?php echo link_to('Eliminar', 'carreraPeticion/delete?id=' . $solicitud_carrera->getId(), array('class' => 'link_show', 'method' => 'delete', 'confirm' => '¿Realmente desea eliminar el registro de solicitud de carrera?')) ?>    
<?php elseif ($solicitud_carrera->getEstado() == 'aprobada'): ?>
    <?php echo link_to('Eliminar', 'carreraPeticio  n/delete?id=' . $solicitud_carrera->getId(), array('class' => 'link_show', 'method' => 'delete', 'confirm' => '¿Realmente desea eliminar el registro de solicitud de carrera?')) ?>   
<?php else: ?>
     <?php echo link_to('Cancelar', 'carreraPeticion/cancelar?id=' . $solicitud_carrera->getId(), array('id' => 'linkenviar', 'method' => 'delete', 'confirm' => '¿Realmente desea cancelar la solicitud de carrera?')) ?>  
<?php endif; ?>

<hr />

