<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('codigo/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '?id_Cliente=' . $form->getObject()->getIdCliente())) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
    </table>
    <label for="codigo_mapa">Marque el sector en el mapa para obtener la longitud y latitud.</label>
    <div  id="mapa" >
    </div>
    <hr />
    &nbsp;<a href="javascript:history.back(-1)">Cancelar</a>            

    <?php if (!$form->getObject()->isNew()): ?>
        <?php if (count($carreras) === 0): ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo link_to('Eliminar', 'codigo/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Está seguro de eliminar el codigo?')) ?>
        <?php endif; ?>
    <?php endif; ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Guardar" />
</form>
