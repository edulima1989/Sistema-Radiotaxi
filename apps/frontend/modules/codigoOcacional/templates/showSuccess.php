<h1>Descripción del cliente ocacional </h1>
<div class="table_show">
<table>
  <tbody>
    <tr>
      <th>Cliente:</th>
      <td><?php echo $sin_codigo->getCliente() ?></td>
      <th>Teléfono:</th>
      <td><?php echo $sin_codigo->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Barrio:</th>
      <td><?php echo $sin_codigo->getSector() ?></td>
      <th>Calle principal:</th>
      <td><?php echo $sin_codigo->getCalle1() ?></td>
    
    </tr>
    <tr>
      <th>Número de  casa:</th>
      <td><?php echo $sin_codigo->getNumCasa() ?></td>
        <th>Calle secundaria:</th>
      <td><?php echo $sin_codigo->getCalle2() ?></td>
    </tr>
    <tr>
      <th>Referencia:</th>
      <td colspan="3" rowspan="3"><?php echo $sin_codigo->getObservacion() ?></td>
    </tr>
  </tbody>
</table>
<hr />
<label>Dirección: </label><input size="50" type="text" id="direccion" value="" > 
<input value="Ubicar en el mapa" type="submit" onclick="codeAddress();">
<div id="mapa" > </div>
<input onclick="calcRoute();" type="button" value="Calcular Recorrido"> 
<input id="distancia " disabled="false" type="text" >
<br />
<input onclick="deleteOverlays();" type=button value="Nuevo">
</div>