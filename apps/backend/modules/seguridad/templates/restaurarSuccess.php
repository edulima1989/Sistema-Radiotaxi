<?php use_helper('I18N', 'Date') ?>
<?php use_stylesheet('/sfDoctrinePlugin/css/global.css', 'first') ?> 
<?php use_stylesheet('/sfDoctrinePlugin/css/default.css', 'first') ?> 

<div id="sf_admin_container" class="seguridadDiv"> 
    <h1>Restauración de Base de Datos</h1>

    <?php if ($sf_user->hasFlash('notice')): ?>
        <div class="notice"><?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?></div>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
        <div class="error"><?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?></div>
    <?php endif; ?>
    <form action='<?php // url_for('')  ?>' method='post' enctype='multipart/form-data' name='formularioDeRestauracion'
          id='formularioDeRestauracion'>
        <table width='360' border='0' align='center' class='normal' cellspacing='7'>
            <tr>
                <td colspan='4' align=center>Indique el origen del archivo de copia: </td>
            </tr>
            <td colspan='2' align=center><input type='file' name='ficheroDeCopia' id='ficheroDeCopia'
                                                size='30'></td>
            <tr>
                <td colspan='3' align='center'><input name='envio' type='submit' id='envio' value='Aceptar'></td>
            </tr>
            </tbody>
            <td>
                <b>IMPORTANTE:</b> <h2>El archivo de copia debe tener la extencion ".sql"</h2>
            </td>

        </table>


    </form>

</div> 