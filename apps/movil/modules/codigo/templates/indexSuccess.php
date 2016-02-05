<h1>Listado de Códigos</h1>

<table class="table">
  <thead>
    <tr>
      <th>Código</th>
      <th>Barrio</th>
      <th>Calle Principal</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($codigos as $codigo): ?>
    <tr>
      <td class="td"><a href="<?php echo url_for('codigo/show?id='.$codigo->getId()) ?>"><?php echo $codigo->getNumero() ?></a></td>
      <td class="td"><?php echo $codigo->getSector() ?></td>
      <td class="td"><?php echo $codigo->getCalle1() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr />