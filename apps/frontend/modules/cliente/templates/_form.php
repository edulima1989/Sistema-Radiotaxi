<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form  action="<?php echo url_for('cliente/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <hr />

    <?php if (!$form->getObject()->isNew()): ?>
        <a href="<?php echo url_for('cliente/show?id=' . $form->getObject()->getId()) ?>">Regresar</a>
        <?php if (count($codigos) === 0): ?>
            &nbsp; &nbsp; <?php echo link_to('Eliminar', 'cliente/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Está seguro de querer eliminar el cliente?')) ?>
            <?php endIf; ?>
    <?php else: ?>
        <a href="<?php echo url_for('cliente/index') ?>">Cancelar</a>
    <?php endif; ?>
    &nbsp; &nbsp; <input type="submit" value="Guardar" />
</form>