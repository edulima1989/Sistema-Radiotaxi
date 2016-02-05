<?php use_helper('I18N') ?>
<?php echo __('Hola %first_name%', array('%first_name%' => $user->getFirstName()), 'sf_guard') ?>,

<?php echo __('A continuación su nombre de usuario y su nueva contraseña:') ?> 

<?php echo __('Nombre de usuario', null, 'sf_guard') ?>: <?php echo $user->getUsername() ?> 
<?php echo __('Contraseña', null, 'sf_guard') ?>: <?php echo $password ?>