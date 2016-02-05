<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('carreraPeticion/' . ($form->getObject()->isNew() ? 'create' : 'show') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
        <hr />

        &nbsp;<a id="linkenviar" href="<?php echo url_for('carreraPeticion/index') ?>">Regresar al listado</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Cancelar', 'carreraPeticion/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Realmente desea cancelar la solicitud de carrera')) ?>
    <?php endif; ?>
        <input id="botonenviar"type="submit" value="Solicitar" />
</form>
