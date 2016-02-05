<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('carreraPeticion/' . ($form->getObject()->isNew() ? 'create' : 'show') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table class="table_form">
        <tbody>
            <?php echo $form ?>
        </tbody>
        <tfoot>
        <td>
            <input type="submit" value="Solicitar" />            
        </td>
        <td>
            <?php if (!$form->getObject()->isNew()): ?>
                <?php echo link_to('Cancelar', 'carreraPeticion/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Realmente desea cancelar la solicitud de carrera')) ?>
            <?php endif; ?>         
        </td>
        <td>
            <a  href="<?php echo url_for('carreraPeticion/index') ?>">Regresar al listado</a>        
        </td>
        
        </tfoot>
    </table>        
    <hr />
</form>
