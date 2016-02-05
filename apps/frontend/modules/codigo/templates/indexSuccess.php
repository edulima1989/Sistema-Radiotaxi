<h1>Listado de Codigos</h1>
<form id="gestion" action="" method="post">
    <label>Ingrese el número del código que desea buscar:</label>
    <table>
        <tr>
            <td><b>Código:</b></td>
            <td><input type="search" name="cod" id="cod" value="<?php echo $cod; ?>"/></td>
        </tr>
    </table>
    <hr />
    <input type="submit" value="Buscar"/>
</form>
<div class="table_show">    
<hr />
</div>
<table class="table">
  <thead>
    <tr>
      <th>Código</th>
      <th>Cliente</th>
      <th>Barrio</th>
      <th>Calle Principal</th>
      <th>Calle Secundaria</th>
      <th>N° casa</th>
      <th>Observación</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($codigos as $codigo): ?>
    <tr>
        <td class="td"><a  href="<?php echo url_for('codigo/show?id='.$codigo->getId()) ?>"><?php echo $codigo->getNumero() ?></a></td>
      <td class="td"><?php echo $codigo->getNombreCliente() ?></td>
      <td class="td"><?php echo $codigo->getSector()->getNombre() ?></td>
      <td class="td"><?php echo $codigo->getCalle1() ?></td>
      <td class="td"><?php echo $codigo->getCalle2() ?></td>
      <td class="td"><?php echo $codigo->getNumCasa() ?></td>
      <td class="td"><?php echo $codigo->getObservacion() ?></td>
      <td class="td"><a href="<?php echo url_for('codigo/edit?id=' . $codigo->getId()) ?>">Editar</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
