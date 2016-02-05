<h1>Descripción del Código <?php echo '  [' . $codigo->getNumero() . '] ' ?></h1>
<table>
  <tbody>
    <tr>
      <th>Código:</th>
      <td><?php echo $codigo->getNumero() ?></td>
    </tr>
    <tr>
      <th>Barrio:</th>
      <td><?php echo $codigo->getSector() ?></td>
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
<br />
<a id="linkenviar" href="<?php echo url_for('codigo/index') ?>">Volver al listado</a>
&nbsp;

