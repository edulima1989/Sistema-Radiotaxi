    <?php use_helper('I18N') ?>
<h1><?php echo __('¿Olvidó su contraseña?', null, 'sf_guard') ?></h1>

<p>
  <?php echo __('No se preocupe, nosotros podemos ayudarle a volver a su cuenta de forma segura!', null, 'sf_guard') ?>
  <?php echo __('Ingrese su dirección de correo electrónico con el cual se registro en Radio-taxi "Benjamín Carrión".', null, 'sf_guard') ?>
</p>
<br />
<form action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post">
  <table>
    <tbody>
      <?php echo $form ?>
    </tbody>
    
  </table>
    <br />
    <hr />
    <input type="submit" name="change" value="<?php echo __('Solicitar', null, 'sf_guard') ?>" />
</form>