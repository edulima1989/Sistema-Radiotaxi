<td class="sf_admin_text sf_admin_list_td_numero">
  <?php echo link_to($vehiculo->getNumero(), 'vehiculo_edit', $vehiculo) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_propietario">
  <?php echo $vehiculo->getPropietario() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_placa">
  <?php echo $vehiculo->getPlaca() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ano">
  <?php echo $vehiculo->getAno() ?>
</td>
