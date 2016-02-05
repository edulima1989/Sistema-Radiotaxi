<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo link_to($peticion->getLastName(), 'peticion_edit', $peticion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $peticion->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono">
  <?php echo $peticion->getTelefono() ?>
</td>
