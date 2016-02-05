<?php use_helper('I18N', 'Date') ?>
<?php include_partial('peticion/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva Solicitud', array(), 'messages') ?></h1>

  <?php include_partial('peticion/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('peticion/form_header', array('peticion' => $peticion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('peticion/form', array('peticion' => $peticion, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('peticion/form_footer', array('peticion' => $peticion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
