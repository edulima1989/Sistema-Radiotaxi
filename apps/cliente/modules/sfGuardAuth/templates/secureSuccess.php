<?php use_helper('I18N') ?>

<h2><?php echo __('Oops! La página que usted solicitó es segurá y usted no tiene las credenciales adecuadas.', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Ingresa abajo para acceder', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>