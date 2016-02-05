<?php use_helper('I18N', 'Date') ?>
<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 
<div id="sf_admin_container" class="seguridadDiv"> 
    <h1>Seguridad de Base de Datos</h1>

    <?php if ($sf_user->hasFlash('notice')): ?>
        <div class="notice"><?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?></div>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
        <div class="error"><?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?></div>
    <?php endif; ?>
    <a id="linkenviar" class="seguridad"href="<?php echo url_for('seguridad/respaldar'); ?>">Respaldar Base de datos</a>
    <br />
    <a id="linkenviar" class="seguridad"href="<?php echo url_for('seguridad/restaurar'); ?>">Restaurar la base de datos a partir de un respaldo</a>
</div>