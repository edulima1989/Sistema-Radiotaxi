<?php use_helper('I18N', 'Date') ?>
<?php include_partial('Propietario/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Crear Propietario', array(), 'messages') ?></h1>

  <?php include_partial('Propietario/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('Propietario/form_header', array('propietario' => $propietario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('Propietario/form', array('propietario' => $propietario, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('Propietario/form_footer', array('propietario' => $propietario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
