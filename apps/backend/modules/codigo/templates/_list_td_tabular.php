<td class="sf_admin_text sf_admin_list_td_numero">
  <?php echo link_to($codigo->getNumero(), 'codigo_edit', $codigo) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cliente">
  <?php echo $codigo->getNombreCliente() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_barrio">
  <?php echo $codigo->getSector()->getNombre() ?>
</td>
