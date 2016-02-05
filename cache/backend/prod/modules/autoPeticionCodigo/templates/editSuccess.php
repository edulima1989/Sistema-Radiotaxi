<?php use_helper('I18N', 'Date') ?>
<?php include_partial('peticionCodigo/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Solicitud de Código', array(), 'messages') ?></h1>

  <?php include_partial('peticionCodigo/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('peticionCodigo/form_header', array('peticion_codigo' => $peticion_codigo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('peticionCodigo/form', array('peticion_codigo' => $peticion_codigo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('peticionCodigo/form_footer', array('peticion_codigo' => $peticion_codigo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
