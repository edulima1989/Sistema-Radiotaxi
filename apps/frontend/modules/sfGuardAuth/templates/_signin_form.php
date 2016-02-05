<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <hr />
    <input type="submit" value="<?php echo __('Ingresar', null, 'sf_guard') ?>" />

    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('¿Olvidó su contraseña?', null, 'sf_guard') ?></a>
    <?php endif; ?>
</form>