<?php use_helper('I18N') ?>
<form action="<?php echo url_for('@homepage') ?>" method="post">
    <table class="table_form">
        <tbody>
            <?php echo $form ?>   
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input id="btn_login" class="accion_login" type="submit" value="<?php echo __('Ingresar', null, 'sf_guard') ?>" />
                </td>    
                <td colspan="2">
                    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
                    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
                        <a class="accion_login" href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('¿Olvidó su contraseña?', null, 'sf_guard') ?></a>
                    <?php endif; ?>
                </td>
                <td colspan="2">
                    <?php if (isset($routes['sf_guard_register'])): ?>
                        &nbsp; <a class="accion_login" href="<?php echo url_for('peticion/new') ?>"><?php echo __('¿Quiere registrarse?', null, 'sf_guard') ?></a>
                    <?php endif; ?>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
