<h1>Evaluación de Calidad</h1>

<table>
    <tbody>

        <tr>
            <th>Código:</th>
            <td><?php echo $carrera->getCodigo() ?></td>
        </tr>
        <tr>
            <th>Detalle:</th>
            <td><?php echo $carrera->getDetalle() ?></td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td><?php echo strtoupper($carrera->getEstado()) ?></td>
        </tr>
        <tr>
            <th>Tiempo:</th>
            <td><?php echo $carrera->getTiempo() . ' minutos' ?></td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td><?php echo $carrera->getFecha() ?></td>
        </tr>
        <tr>
            <th>Hora:</th>
            <td><?php echo $carrera->getHora() ?></td>
        </tr>
    </tbody>
</table>
<hr />
<form action="<?php echo url_for('carrera/evaluacionEnviar?id=' . $carrera->getId()) ?>" method="post">
    <b>Por favor califique la calidad de la atención del servicio en una escala de 1 a 5. <br /> 1 = Malo, 2 = Regular, 3 = Bueno, 4 = Muy Bueno y 5 = Excelente. </b>
    <br /><br />
    <input name="evalua_calidad" type="radio" value="1" id="calidad_1" /><label for="calidad_1">1</label>&nbsp;
    <input name="evalua_calidad" type="radio" value="2" id="calidad_2" /><label for="calidad_2">2</label>&nbsp;
    <input checked="checked" name="evalua_calidad" type="radio" value="3" id="calidad_3" /><label for="calidad_3">3</label>&nbsp;
    <input name="evalua_calidad" type="radio" value="4" id="calidad_4" /><label for="calidad_4">4</label>&nbsp;
    <input name="evalua_calidad" type="radio" value="5" id="calidad_5" /><label for="calidad_5">5</label>
    <hr />

    <br />

    <a id="linkenviar" href="<?php echo url_for('carrera/evaluacionCalidad') ?>">Regresar al listado</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" id="botonenviar" value="Enviar"/>
</form>
