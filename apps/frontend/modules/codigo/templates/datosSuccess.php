<h1>Descripción del Codigo <?php echo $codigo->getNumero() ?></h1>
<div class="table_show">
<table>
    <tbody>
        <tr>
            <th>Cliente:</th>
            <td><?php echo $codigo->getNombreCliente() ?></td>
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
            <th>N° casa:</th>
            <td><?php echo $codigo->getNumCasa() ?></td>
        </tr>
        <tr>
            <th>Referencia:</th>
            <td><?php echo $codigo->getObservacion() ?></td>
        </tr>
    </tbody>
</table>
<hr />
<a href="<?php echo url_for('codigo/edit?id=' . $codigo->getId()) ?>">Editar Código</a>
<hr />
<label>Dirección: </label><input size="50" type="text" id="direccion" value="" > 
<input value="Ubicar en el mapa" type="submit" onclick="codeAddress();">
<div id="mapa" > </div>
<input onclick="calcRoute();" type="button" value="Calcular Recorrido"> 
<input id="distancia" disabled="false" type="text" >
<br />
<input onclick="deleteOverlays();" type=button value="Nuevo">
</div>
