<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('solicitarCodigo/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <th/>  
    <table>
        <tfoot>        

        </tfoot>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <hr />
    <ul >
        <li style="display:inline;">
            &nbsp;<label ><a id="linkenviar" href="<?php echo url_for('informacion/inicio') ?>">Cancelar</a></label>
        </li >
        <li style="display:inline; padding: 25px;">
            <input id="botonenviar"  type="submit" value="Solicitar" />     
        </li>
    </ul>
</form>
