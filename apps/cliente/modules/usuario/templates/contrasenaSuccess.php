<h1>Cambiar contraseña</h1>
<form action="<?php echo url_for('usuario/updatecontrasena?id=' . $form->getObject()->getId() ) ?>" method="post" >
    <table>
        <tbody>
            <tr>
                <th><label >Ingrese nueva contraseña: </label></th>
                <td><input name="password1" id="password1"  type="password"  /></td>
            </tr>
            <tr>
                <th><label >Repita nueva contraseña: </label></th>
                <td><input name="password2" id="password2" type="password"  /></td>
            </tr>            
        </tbody>
    </table>
    <hr />
    <a id="linkenviar" href="<?php echo url_for('usuario/show?id=' . $form->getObject()->getId())?>">Cancelar</a>
    &nbsp;&nbsp;&nbsp;
    <input id="botonenviar" type="submit" value="Guardar" />
</form>