<div>
<h1>Carreras para evaluar </h1>
    <table class="table">
        <thead>
            <tr>
                <th>N°</th>
                <th>Código</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $i => $carrera): ?>
                <tr>
                    <td class="td"><a href="<?php echo url_for('carrera/evaluar?id=' . $carrera->getId()) ?>"><?php echo ($i + 1) ?></a></td>
                    <td class="td"><?php echo $carrera->getCodigo() ?></td>
                    <td class="td"><?php echo $carrera->getFecha() ?></td>
                    <td class="td"><?php echo $carrera->getHora() ?></td>
                    <td class="td"><a href="<?php echo url_for('carrera/evaluar?id=' . $carrera->getId()) ?>">Evaluar</a></td>
                </tr>   
            <?php endforeach; ?>
        </tbody>
    </table>
    <hr />
</div>
