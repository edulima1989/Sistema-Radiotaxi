<?php use_helper('I18N', 'Date') ?>
<?php include_partial('codigo/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Codigo   (%%numero%%)', array('%%numero%%' => $codigo->getNumero()), 'messages') ?></h1>

  <?php include_partial('codigo/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('codigo/form_header', array('codigo' => $codigo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('codigo/form', array('codigo' => $codigo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'carreras' => $carreras, 'solicitudes' => $solicitudes)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('codigo/form_footer', array('codigo' => $codigo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
