<h1>Informe de Carrera # <?php echo $carrera->getId() ?></h1>
<table>
  <tbody>
    <tr>
      <th>Operador:</th>
      <td><?php echo $carrera->getSfGuardUser() ?></td>
    </tr>
    <tr>
      <th>Código:</th>
      <td><a href="<?php echo $carrera->getLinkCodigo() ?>"><?php echo $carrera->getNumCodigo() ?></a></td>
    </tr>
    <tr>
      <th>Cliente:</th>
      <td><?php echo $carrera->getCodigo()->getNombreCliente() ?></td>
    </tr>
    <tr>
      <th>Unidad:</th>
      <td><?php echo $carrera->getVehiculo() ?></td>
    </tr>
    <tr>
    <tr>
      <th>Detalle:</th>
      <td><?php echo $carrera->getDetalle() ?></td>
    </tr>
    <tr>    
      <th>Tiempo de espera:</th>
      <td><?php echo $carrera->getTiempo() ?> minutos</td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $carrera->getFecha() ?></td>
    </tr>
    <tr>
      <th>Hora:</th>
      <td><?php echo $carrera->getHora() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $carrera->getEstado() ?></td>
    </tr>
  </tbody>
</table>

<hr />
