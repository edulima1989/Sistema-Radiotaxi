<h1>Reservación del cliente "<?php echo $reservacion->getCodigo()->getNombreCliente() ?>"</h1>
<table>
  <tbody>
    <tr>
      <th>Código:</th>
      <td><?php echo $reservacion->getCodigo() ?></td>
    </tr>
    <tr>
      <th>Lunes:</th>
      <td><?php echo $reservacion->getLunes() == '1' ? 'SI' : 'NO' ?></td>
    </tr>
    <tr>
      <th>Martes:</th>
      <td><?php echo $reservacion->getMartes() == '1' ? 'SI' : 'NO'  ?></td>
    </tr>
    <tr>
      <th>Miercoles:</th>
      <td><?php echo $reservacion->getMiercoles() == '1' ? 'SI' : 'NO'  ?></td>
    </tr>
    <tr>
      <th>Jueves:</th>
      <td><?php echo $reservacion->getJueves() == '1' ? 'SI' : 'NO'  ?></td>
    </tr>
    <tr>
      <th>Viernes:</th>
      <td><?php echo $reservacion->getViernes() == '1' ? 'SI' : 'NO'  ?></td>
    </tr>
    <tr>
      <th>Sábado:</th>
      <td><?php echo $reservacion->getSabado() == '1' ? 'SI' : 'NO'  ?></td>
    </tr>
    <tr>
      <th>Domingo:</th>
      <td><?php echo $reservacion->getDomingo() == '1' ? 'SI' : 'NO'  ?></td>
    </tr>
    <tr>
      <th>Horario 1:</th>
      <td><?php echo $reservacion->getHorario1() ?></td>
    </tr>
    <tr>
      <th>Horario 2:</th>
      <td><?php echo $reservacion->getHorario2() ?></td>
    </tr><tr>
      <th>Horario 3:</th>
      <td><?php echo $reservacion->getHorario3() ?></td>
    </tr>  </tbody>
</table>

<hr />

<a href="<?php echo url_for('reservacion/edit?id='.$reservacion->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('reservacion/index') ?>">Ir al listado</a>
