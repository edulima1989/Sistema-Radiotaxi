<fieldset id="sf_fieldset_<?php echo preg_replace('/[^a-z0-9_]/', '_', strtolower($fieldset)) ?>">
    <h2><?php echo "Cliente: " . $peticion_codigo->getSfGuardUser() ?></h2>
    <?php if ('NONE' != $fieldset): ?>
        <h2><?php echo __($fieldset, array(), 'messages') ?></h2>
    <?php endif; ?>

    <?php foreach ($fields as $name => $field): ?>
        <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
        <?php
        include_partial('peticionCodigo/form_field', array(
            'name' => $name,
            'attributes' => $field->getConfig('attributes', array()),
            'label' => $field->getConfig('label'),
            'help' => $field->getConfig('help'),
            'form' => $form,
            'field' => $field,
            'class' => 'sf_admin_form_row sf_admin_' . strtolower($field->getType()) . ' sf_admin_form_field_' . $name,
        ))
        ?>
    <?php endforeach; ?>

</fieldset>
<h2>Números de contacto con el cliente:</h2>

<table>
    <tr>   
        <td><label >Teléfono:</label></td>   
        <td><label ><?php echo $peticion_codigo->getSfGuardUser()->getTelefono() ?></label></td>  
    </tr>
    <tr>    
        <td><label >Célular:</label></td> 
        <td><label ><?php echo $peticion_codigo->getSfGuardUser()->getTelefonoMovil() ?></label></td> 

    </tr>
</table>
