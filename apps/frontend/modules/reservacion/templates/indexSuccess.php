<h1>Lista de Reservaciones</h1>

<table class="table">
  <thead>
    <tr>
        <th class="th">N°</th>
      <th class="th">Código</th>
      <th class="th">Lunes</th>
      <th class="th">Martes</th>
      <th class="th">Miercoles</th>
      <th class="th">Jueves</th>
      <th class="th">Viernes</th>
      <th class="th">Sábado</th>
      <th class="th">Domingo</th>
      <th class="th">Horario 1</th>
      <th class="th">Horario 2</th>
      <th class="th">Horario 3</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reservacions as $i => $reservacion): ?>
    <tr>
      <td class="td"><a href="<?php echo url_for('reservacion/show?id='.$reservacion->getId()) ?>"><?php echo ($i + 1) ?></a></td>
      <td class="td"><a href="<?php echo url_for('codigo/show?id='.$reservacion->getCodigo()->getId()) ?>"><?php echo $reservacion->getCodigo() ?></a></td>
      <td class="td"><?php echo $reservacion->getLunes() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getMartes() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getMiercoles() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getJueves() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getViernes() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getSabado() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getDomingo() == '1' ? 'SI' : 'NO'  ?></td>
      <td class="td"><?php echo $reservacion->getHorario1() ?></td>
      <td class="td"><?php echo $reservacion->getHorario2() ?></td>
      <td class="td"><?php echo $reservacion->getHorario3() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class="table_show">
<hr />
  <a href="<?php echo url_for('reservacion/new') ?>">Nueva Reservación</a>
</div>
