<td colspan="3">
  <?php echo __('%%last_name%% - %%first_name%% - %%telefono%%', array('%%last_name%%' => link_to($peticion->getLastName(), 'peticion_edit', $peticion), '%%first_name%%' => $peticion->getFirstName(), '%%telefono%%' => $peticion->getTelefono()), 'messages') ?>
</td>
