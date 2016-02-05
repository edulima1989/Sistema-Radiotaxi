<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('solicitarCodigo/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <th/>  
    <table class="table_form">
        <tfoot>        
            <tr>
                <td>
                    <input id="botonenviar"  type="submit" value="Solicitar" />                         
                </td>
                <td>
                    <a href="<?php echo url_for('informacion/inicio') ?>">Cancelar</a></label>                    
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
</form>
<hr />
