<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_sfGuardUser">
  <?php echo __('Solicitante', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_barrio">
  <?php if ('barrio' == $sort[0]): ?>
    <?php echo link_to(__('Barrio', array(), 'messages'), '@peticion_codigo', array('query_string' => 'sort=barrio&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Barrio', array(), 'messages'), '@peticion_codigo', array('query_string' => 'sort=barrio&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_calle1">
  <?php if ('calle1' == $sort[0]): ?>
    <?php echo link_to(__('Teléfono', array(), 'messages'), '@peticion_codigo', array('query_string' => 'sort=calle1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Teléfono', array(), 'messages'), '@peticion_codigo', array('query_string' => 'sort=calle1&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>