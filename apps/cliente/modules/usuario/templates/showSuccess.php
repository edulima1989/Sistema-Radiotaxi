<h1>Información de Usuario</h1>
<table>
  <tbody>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $sf_guard_user->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $sf_guard_user->getLastName() ?></td>
    </tr>
    <tr>
      <th>Género:</th>
      <td><?php echo $sf_guard_user->getSexo() == 'F' ? 'Femenino' : 'Masculino' ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $sf_guard_user->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Teléfono:</th>
      <td><?php echo $sf_guard_user->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Celular:</th>
      <td><?php echo $sf_guard_user->getTelefonoMovil() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $sf_guard_user->getUsername() ?></td>
    </tr>
    <tr>
      <th>Correo:</th>
      <td><?php echo $sf_guard_user->getEmailAddress() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<br />
<a id="linkenviar" href="<?php echo url_for('usuario/edit?id='.$sf_guard_user->getId()) ?>">Editar Datos</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a id="linkenviar" href="<?php echo url_for('usuario/contrasena?id='.$sf_guard_user->getId()) ?>">Cambiar Contraseña</a>