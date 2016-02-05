<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 

<h1>respadlandoooooooooooooooooooooooooooooo</h1>



<?php if ($sf_user->hasFlash('notice')): ?>
        <div class="notice"><?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?></div>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
        <div class="error"><?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?></div>
    <?php endif; ?>