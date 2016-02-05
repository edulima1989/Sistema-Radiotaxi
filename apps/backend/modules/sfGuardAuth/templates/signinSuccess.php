<?php use_helper('I18N') ?>
<div class="login">
<h1><?php echo __('Ingreso Administrador', null, 'sf_guard') ?></h1>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
</div>