<td colspan="4">
  <?php echo __('%%numero%% - %%propietario%% - %%placa%% - %%ano%%', array('%%numero%%' => link_to($vehiculo->getNumero(), 'vehiculo_edit', $vehiculo), '%%propietario%%' => $vehiculo->getPropietario(), '%%placa%%' => $vehiculo->getPlaca(), '%%ano%%' => $vehiculo->getAno()), 'messages') ?>
</td>
