<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numero">
  <?php if ('numero' == $sort[0]): ?>
    <?php echo link_to(__('N° de Código', array(), 'messages'), '@codigo', array('query_string' => 'sort=numero&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('N° de Código', array(), 'messages'), '@codigo', array('query_string' => 'sort=numero&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_cliente">
  <?php echo __('Cliente', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_barrio">
  <?php if ('barrio' == $sort[0]): ?>
    <?php echo link_to(__('Barrio', array(), 'messages'), '@codigo', array('query_string' => 'sort=barrio&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Barrio', array(), 'messages'), '@codigo', array('query_string' => 'sort=barrio&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>