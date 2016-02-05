<h1>Listado de Carreras</h1>  
<form  id="gestion" action="" method="post">
    <label>Seleccione el intervalo de fechas para el que desea revisar las carreras realizadas.</label>   
    <table>
        <tr>
            <th>Desde: </th>
            <td><input type="text" name="datepicker" id="datepicker" value="<?php echo $datepicker; ?>"  readonly="readonly" size="12" /> </td>  
        </tr>
        <tr>
            <th>Hasta: </th>
            <td><input type="text" name="datepicker2" id="datepicker2"  value="<?php echo $datepicker2; ?>" readonly="readonly" size="12" /></td>  
        </tr>

    </table>
    <input type="submit" value="Listar"/>
    <br />
</form>
<br />

<div >
    <table class="table">    
        <thead>
            <tr>
                <th class="th">N° </th>
                <th class="th">Operador</th>
                <th class="th">Código</th>
                <th class="th">Unidad</th>
                <th class="th">Fecha</th>
                <th class="th">Hora</th>
                <th class="th">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $i => $carrera): ?>
                <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                    <td class="td"><a target="_blank" href="<?php echo url_for('carrera/show?id=' . $carrera->getId()) ?>"><?php echo ($i + 1) ?></a></td>
                    <td class="td"><?php echo $carrera->getSfGuardUser() ?></td>
                    <td class="td"><a target="_blank" href="<?php echo $carrera->getLinkCodigo() ?>"> <?php echo $carrera->getNumCodigo() ?> </a></td>
                    <td class="td"><a target="_blank" href="<?php echo url_for('vehiculo/show?id=' . $carrera->getVehiculo()->getId()) ?>" ><?php echo $carrera->getVehiculo() ?> </a></td>
                    <td class="td"><?php echo $carrera->getFecha() ?></td>
                    <td class="td"><?php echo $carrera->getHora() ?></td>
                    <td class="td"><?php echo strtoupper($carrera->getEstado()) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<hr />
<a target="_blank" href="<?php echo url_for('carrera/reporte') ?>" >Generar Reporte</a>
    