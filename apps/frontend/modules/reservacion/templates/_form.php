<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<div id="form-reservaciones">
    <form  class="reservacion-datos" action="<?php echo url_for('reservacion/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <hr />
<!--    <input type="time" name="fechayhora" required >-->
    &nbsp;<a href="<?php echo url_for('reservacion/index') ?>">Ir al listado</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;&nbsp;&nbsp;<?php echo link_to('Eliminar', 'reservacion/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Esta seguro de eliminar la reservación?')) ?>
    <?php endif; ?>
    &nbsp;&nbsp;&nbsp;<input type="submit" value="Guardar" />
</form>
    <div class="reservacion-datos" id="reservacion-codigo"></div>
</div>