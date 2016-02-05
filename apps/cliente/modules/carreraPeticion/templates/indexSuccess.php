<div>
<h1>Solicitudes de carreras </h1>
    <table class="table">
        <thead>
            <tr>
                <th>N°</th>
                <th>Código</th>
                <th>Estado</th>
                <th>Tiempo Espera</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitud_carreras as $i => $solicitud_carrera): ?>
                <tr>
                    <td class="td"><a href="<?php echo url_for('carreraPeticion/show?id=' . $solicitud_carrera->getId()) ?>"><?php echo ($i + 1) ?></a></td>
                    <td class="td"><?php echo $solicitud_carrera->getCodigo() ?></td>
                    <td class="td"><?php echo strtoupper($solicitud_carrera->getEstado()) ?></td>
                    <td class="td"><?php echo $solicitud_carrera->getTiempo() . ' minutos' ?> </td>
                    <td class="td"><?php echo $solicitud_carrera->getFecha() ?></td>
                    <td class="td"><?php echo $solicitud_carrera->getHora() ?></td>
                    <td class="td"><a href="<?php echo url_for('carreraPeticion/show?id=' . $solicitud_carrera->getId()) ?>">Ver</a></td>
                </tr>   
            <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
