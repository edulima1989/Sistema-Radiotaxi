<h1>Listado de Códigos</h1>

<table class="table">
  <thead>
    <tr>
      <th>Código</th>
      <th>Barrio</th>
      <th>Calle Principal</th>
      <th>Calle Secundaria</th>
      <th>N° casa</th>
      <th>Referencia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($codigos as $codigo): ?>
    <tr>
      <td class="td"><a href="<?php echo url_for('codigo/show?id='.$codigo->getId()) ?>"><?php echo $codigo->getNumero() ?></a></td>
      <td class="td"><?php echo $codigo->getSector() ?></td>
      <td class="td"><?php echo $codigo->getCalle1() ?></td>
      <td class="td"><?php echo $codigo->getCalle2() ?></td>
      <td class="td"><?php echo $codigo->getNumCasa() ?></td>
      <td class="td"><?php echo $codigo->getObservacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr />