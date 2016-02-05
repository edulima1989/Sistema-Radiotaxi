<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numero">
  <?php if ('numero' == $sort[0]): ?>
    <?php echo link_to(__('Número', array(), 'messages'), '@vehiculo', array('query_string' => 'sort=numero&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Número', array(), 'messages'), '@vehiculo', array('query_string' => 'sort=numero&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_propietario">
  <?php echo __('Propietario', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_placa">
  <?php if ('placa' == $sort[0]): ?>
    <?php echo link_to(__('Placa', array(), 'messages'), '@vehiculo', array('query_string' => 'sort=placa&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Placa', array(), 'messages'), '@vehiculo', array('query_string' => 'sort=placa&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_ano">
  <?php if ('ano' == $sort[0]): ?>
    <?php echo link_to(__('Año', array(), 'messages'), '@vehiculo', array('query_string' => 'sort=ano&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Año', array(), 'messages'), '@vehiculo', array('query_string' => 'sort=ano&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>