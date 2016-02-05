<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('sector/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <label for="sector_mapa">Marque el sector en el mapa para obtener la longitud y latitud.</label>
    <div  id="mapa" >
    </div>
    <hr />
    &nbsp;<a href="<?php echo url_for('sector/index') ?>">Ir al listado</a>
    <?php // if (!$form->getObject()->isNew()): ?>
        &nbsp;&nbsp;<?php // echo link_to('Delete', 'sector/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
    <?php // endif; ?>
    &nbsp;&nbsp;<input type="submit" value="Guardar" />
</form>
