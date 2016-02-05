<?php use_helper('I18N', 'Date') ?>
<?php include_partial('Vehiculo/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Unidad "%%numero%%"', array('%%numero%%' => $vehiculo->getNumero()), 'messages') ?></h1>

  <?php include_partial('Vehiculo/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('Vehiculo/form_header', array('vehiculo' => $vehiculo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('Vehiculo/form', array('vehiculo' => $vehiculo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'carreras' => $carreras)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('Vehiculo/form_footer', array('vehiculo' => $vehiculo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
