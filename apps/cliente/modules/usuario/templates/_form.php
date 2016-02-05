<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('usuario/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
        <hr />
    <a id="linkenviar" href="<?php echo url_for('usuario/show?id=' . $form->getObject()->getId()) ?>">Cancelar</a>
    &nbsp;&nbsp;&nbsp;
    <input id="botonenviar" type="submit" value="Guardar" />
</form>
