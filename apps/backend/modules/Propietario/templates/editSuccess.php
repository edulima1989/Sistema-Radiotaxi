<?php use_helper('I18N', 'Date') ?>
<?php include_partial('Propietario/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Propietario "%%last_name%% %%first_name%%"', array('%%last_name%%' => $propietario->getLastName(), '%%first_name%%' => $propietario->getFirstName()), 'messages') ?></h1>

  <?php include_partial('Propietario/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('Propietario/form_header', array('propietario' => $propietario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('Propietario/form', array('propietario' => $propietario, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'unidades' => $unidades)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('Propietario/form_footer', array('propietario' => $propietario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
