<?php use_helper('I18N') ?>
<h2><?php echo __('Hola, %name%', array('%name%' => $user->getName()), 'sf_guard') ?></h2>

<h3><?php echo __('Escriba la nueva contraseña en el siguiente formulario.', null, 'sf_guard') ?></h3>

<form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key='.$sf_request->getParameter('unique_key')) ?>" method="POST">
  <table>
    <tbody>
      <?php echo $form ?>
    </tbody>
    <tfoot><tr><td><input type="submit" name="change" value="<?php echo __('Cambiar', null, 'sf_guard') ?>" /></td></tr></tfoot>
  </table>
</form>