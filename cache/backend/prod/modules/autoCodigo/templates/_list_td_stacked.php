<td colspan="3">
  <?php echo __('%%numero%% - %%cliente%% - %%barrio%%', array('%%numero%%' => link_to($codigo->getNumero(), 'codigo_edit', $codigo), '%%cliente%%' => $codigo->getCliente(), '%%barrio%%' => $codigo->getBarrio()), 'messages') ?>
</td>
