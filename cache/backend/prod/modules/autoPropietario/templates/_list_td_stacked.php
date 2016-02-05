<td colspan="4">
  <?php echo __('%%cedula%% - %%last_name%% - %%first_name%% - %%telefono%%', array('%%cedula%%' => link_to($propietario->getCedula(), 'propietario_edit', $propietario), '%%last_name%%' => $propietario->getLastName(), '%%first_name%%' => $propietario->getFirstName(), '%%telefono%%' => $propietario->getTelefono()), 'messages') ?>
</td>
