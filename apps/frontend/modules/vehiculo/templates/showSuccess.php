<h1>Descripción de Unidad</h1>
<div class="table_show">
<table>
  <tbody>
    <tr>
      <th>Propietario:</th>
      <td><?php echo $vehiculo->getPropietario() ?></td>
    </tr>
    <tr>
      <th>Número:</th>
      <td><?php echo $vehiculo->getNumero() ?></td>
    </tr>
    <tr>
      <th>Placa:</th>
      <td><?php echo $vehiculo->getPlaca() ?></td>
    </tr>
    <tr>
      <th>Marca:</th>
      <td><?php echo $vehiculo->getMarca() ?></td>
    </tr>
    <tr>
      <th>Modelo:</th>
      <td><?php echo $vehiculo->getModelo() ?></td>
    </tr>
    <tr>
      <th>Año:</th>
      <td><?php echo $vehiculo->getAno() ?></td>
    </tr>
  </tbody>
</table>
<hr />
<a href="javascript:history.back(-1)">Regresar</a>
&nbsp;
<!--<a href="<?php // echo url_for('vehiculo/edit?id='.$vehiculo->getId()) ?>">Editar</a>-->
</div>
