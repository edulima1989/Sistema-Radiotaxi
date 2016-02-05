<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($peticion, array(  'label' => 'Aprobar',  'params' =>   array(  ),  'class_suffix' => 'edit',)) ?>
    <?php echo $helper->linkToDelete($peticion, array(  'label' => 'Rechazar',  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',)) ?>
  </ul>
</td>
