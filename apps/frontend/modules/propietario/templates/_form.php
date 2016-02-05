<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('propietario/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php if (!$form->getObject()->isNew()): ?>
                    &nbsp;<a href="<?php echo url_for('propietario/show?id='.$form->getObject()->getId()) ?>">Regresar</a>
                        &nbsp;<?php echo link_to('Eliminar', 'propietario/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Está seguro de eliminar el propietario ' . $form->getObject()->getLastName() . '?')) ?>
                    <?php else: ?>
                    &nbsp;<a href="<?php echo url_for('propietario/index') ?>">Regresar al Listado</a>                        
                    <?php endif; ?>
                    <input type="submit" value="Guardar" />
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
</form>
