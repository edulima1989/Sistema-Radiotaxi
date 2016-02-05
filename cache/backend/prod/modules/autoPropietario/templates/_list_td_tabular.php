<td class="sf_admin_text sf_admin_list_td_cedula">
  <?php echo link_to($propietario->getCedula(), 'propietario_edit', $propietario) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo $propietario->getLastName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $propietario->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono">
  <?php echo $propietario->getTelefono() ?>
</td>
