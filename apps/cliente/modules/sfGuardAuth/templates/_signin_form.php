<?php use_helper('I18N') ?>

<div class="login">
    <h1><?php echo __('Ingreso de Cliente', null, 'sf_guard') ?></h1>
    <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table>
            <tbody>
                <?php echo $form ?>
            </tbody>
            <tfoot>
                <tr>      
                    <td colspan="2">
                        <input type="submit" value="<?php echo __('Ingresar', null, 'sf_guard') ?>" />
                        <?php $routes = $sf_context->getRouting()->getRoutes() ?>
                        <?php if (isset($routes['sf_guard_forgot_password'])): ?>
                            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('¿Olvidó su contraseña?', null, 'sf_guard') ?></a>
                        <?php endif; ?>

                        <?php if (isset($routes['sf_guard_register'])): ?>
                            &nbsp; <a href="<?php echo url_for('peticion/new') ?>"><?php echo __('¿Quiere registrarse?', null, 'sf_guard') ?></a>
                        <?php endif; ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>