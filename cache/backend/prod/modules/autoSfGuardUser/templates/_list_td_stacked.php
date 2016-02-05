<td colspan="4">
  <?php echo __('%%username%% - %%first_name%% - %%last_name%% - %%telefono%%', array('%%username%%' => link_to($sf_guard_user->getUsername(), 'sf_guard_user_edit', $sf_guard_user), '%%first_name%%' => $sf_guard_user->getFirstName(), '%%last_name%%' => $sf_guard_user->getLastName(), '%%telefono%%' => $sf_guard_user->getTelefono()), 'messages') ?>
</td>
