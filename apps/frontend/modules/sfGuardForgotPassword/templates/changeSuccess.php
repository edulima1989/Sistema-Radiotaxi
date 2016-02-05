<?php use_helper('I18N') ?>
<h1><?php echo __('¡Hola %name%!', array('%name%' => $user->getName()), 'sf_guard') ?></h1>
<div class="table_show">

    <h3><?php echo __('Por favor escriba la nueva contraseña en el siguiente formulario.', null, 'sf_guard') ?></h3>
</div>
<form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key=' . $sf_request->getParameter('unique_key')) ?>" method="POST">
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <hr />
    <input type="submit" name="change" value="<?php echo __('Cambiar', null, 'sf_guard') ?>" />
</form>