<h1>Gestión de Carrera</h1>
<input type="checkbox" name="codigo" value="1" class="codOcasional" <?php echo $isOcasional ?>> Cliente Ocasional

<form class="conCod " action="<?php echo url_for('carrera/getCod_Veh') ?>" method="post">
    <div >
        <table>
            <tbody>
                <tr >
                    <th><label>Codigo:<b style="color: red;">*</b></label></th>
                    <td><input type="text" name="codigo" value="<?php echo $sf_request->getParameter('codigo') ?>" id="codigo" /></td>
                    <th>Cliente:</th>
                    <td><?php echo $codigo->getNombreCliente() ?></td>
                </tr>

                <tr>
                    <th><label>Barrio:</label></th>
                    <td><?php echo $codigo->getBarrio() ?></td>
                    <th><label>Calle Principal:</label></th>
                    <td><?php echo $codigo->getCalle1() ?></td>
                </tr>

                <tr >
                    <th><label>N°- casa:</label></th>
                    <td><?php echo $codigo->getNumCasa() ?></td>
                    <th><label>Calle Secundaria:</label></th>
                    <td><?php echo $codigo->getCalle2() ?></td>


                </tr>

                <tr>
                    <th rowspan="1"><label>Referencia:</label></th>
                    <td colspan="3" rowspan="3"><?php echo $codigo->getObservacion() ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <hr />
    <div > 
        <table>
            <tbody>
                <tr>
                    <th><label>Unidad:<b style="color: red;">*</b></label></th>
                    <td>
                        <select name="vehiculo"  id="vehiculo"/>
                        <?php foreach ($unidades as $i => $unidad): ?>
                <option value="<?php echo $unidad->getNumero() ?>"
                <?php if ($sf_request->getParameter('vehiculo') == $unidad->getNumero())
                    echo 'selected="selected"'
                    ?>>
                    <?php echo $unidad->getNumero() ?></option>
<?php endforeach; ?>
            </select >  
            </td>
            <th><label>Conductor:</label></th>
            <td><?php echo $vehiculo->getPropietario() ?></td>
            </tr>
            <tr>
                <th><label>Placa:</label></th>
                <td><?php echo $vehiculo->getPlaca() ?></td>
                <th><label>Modelo:</label></th>
                <td><?php echo $vehiculo->getMarca() . " - " . $vehiculo->getModelo() ?></td>
            </tr>

            </tbody>
        </table>
    </div>
    <hr />
    <input type="submit" value="Cargar Datos" />
</form>

<form class="sinCod "  style="display: none;" action="<?php echo url_for('carrera/getVehiculo') ?>" method="post"> 
    <div >
        <table>
            <tbody>

                <tr >
                    <th><label>Cliente:<b style="color: red;">*</b></label></th>
                    <td><input type="text" name="clienteS" value="<?php echo $sinCodigo->getCliente() ?>" id="clienteS" /></td>
                    <th><label>Teléfono:<b style="color: red;">*</b></label></th>
                    <td ><input type="text" name="telefonoS" value="<?php echo $sinCodigo->getTelefono() ?>" id="telefonoS" /></td>
                </tr>

                <tr>
                    <th><label>Barrio:<b style="color: red;">*</b></label></th>
                    <td><input type="text" name="barrioS" value="<?php echo $sf_request->getParameter('barrioS') ?>" id="barrioS" /></td>
                    <th><label>Calle Principal:<b style="color: red;">*</b></label></th>
                    <td><input type="text" name="calle1S" value="<?php echo $sf_request->getParameter('calle1S') ?>" id="calle1S" /></td>
                </tr>

                <tr >
                    <th><label>N°- casa:</label></th>
                    <td><input type="text" name="numcasaS" value="<?php echo $sf_request->getParameter('numcasaS') ?>" id="numcasaS" /></td>
                    <th><label>Calle Secundaria:</label></th>
                    <td><input type="text" name="calle2S" value="<?php echo $sf_request->getParameter('calle2S') ?>" id="calle2S" /></td>
                </tr>

                <tr>
                    <th rowspan="1"><label>Referencia:</label></th>
                    <td colspan="3" rowspan="3"><textarea  cols="75" rows="3" name="observacionS"id="observacionS" ><?php echo $sf_request->getParameter('observacionS') ?></textarea></td>
                </tr>
            </tbody>
        </table>

    </div>
    <hr/>
    <div > 
        <table>
            <tbody>
                <tr>
                    <th><label>Unidad:<b style="color: red;">*</b></label></th>
                    <td>
                        <select name="vehiculoS"  id="vehiculoS"/>
            <?php foreach ($unidades as $i => $unidad): ?>
                <option value="<?php echo $unidad->getNumero() ?>"
                        <?php if ($sf_request->getParameter('vehiculoS') == $unidad->getNumero())
                            echo 'selected="selected"'
                            ?>>
    <?php echo $unidad->getNumero() ?></option>
<?php endforeach; ?>
            </select >  
            </td>
            <th><label>Conductor:</label></th>
            <td><?php echo $vehiculoS->getPropietario() ?></td>
            </tr>
            <tr>
                <th><label>Placa:</label></th>
                <td><?php echo $vehiculoS->getPlaca() ?></td>
                <th><label>Modelo:</label></th>
                <td><?php echo $vehiculoS->getMarca() . " - " . $vehiculoS->getModelo() ?></td>
            </tr>

            </tbody>
        </table>
    </div>
    <hr/>
    <input type="submit" value="Cargar Datos" />

</form>

<br>

<form  class="conCod"action="<?php echo url_for('carrera/create?id_Cod=' . $codigo->getId() . '&id_Veh=' . $vehiculo->getId()) ?>" method="post">
    <table>
<?php echo $form ?>
    </table>
    <hr />
    <input type="submit" value="Crear Carrera" />

</form>
<form style="display: none;" class="sinCod "action="<?php echo url_for('carrera/createSin?id_Veh=' . $vehiculoS->getId() . '&clienteS=' . $sinCodigo->getCliente() . '&telefonoS=' . $sinCodigo->getTelefono() . '&barrioS=' . $sinCodigo->getBarrio() . '&calle1S=' . $sinCodigo->getCalle1() . '&calle2S=' . $sinCodigo->getCalle2() . ',&observacionS=' . $sinCodigo->getObservacion() . ',&numcasaS=' . $sinCodigo->getNumCasa()) ?>" method="post">
    <table>
<?php echo $form ?>
    </table>
    <hr />
    <input type="submit" value="Crear Carrera" />
</form>


<h1>Carreras Solicitadas</h1>

<table class="carreras">
    <thead>
        <tr class="head">      
            <th>Código</th>
            <th>Detalle</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Tiempo espera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($solicitud as $i => $solicitud_carrera): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <td ><a target="_blank" href="<?php echo url_for('codigo/datos?id=' . $solicitud_carrera->getIdCodigo()); ?>"><?php echo $solicitud_carrera->getCodigo() ?></a></td>
                <td ><?php echo $solicitud_carrera->getDetalle() ?></td>
                <td><?php echo $solicitud_carrera->getFecha() ?></td>
                <td><?php echo $solicitud_carrera->getHora() ?></td>
                <td><?php echo $solicitud_carrera->getTiempo() . ' minutos' ?></td>
                <td class="accion"> 
                    <form class="form-solicitud" action="<?php echo url_for('carrera/aprobarCarrera?id=' . $solicitud_carrera->getId()) ?>" method="post"> 
                        <table>
                            <tbody>
                                <tr><th>Unidad:</th>
                                    <td><select name="vehiculo"  id="vehi"/>
                            <?php foreach ($unidades as $i => $unidad): ?>
                                <option value="<?php echo $unidad->getNumero() ?>"><?php echo $unidad->getNumero() ?></option>
    <?php endforeach; ?> </select >  </td>
                            </tr>
                            <tr>
                                <th>Tiempo:</th>
                                <td><select name="tiempo"  id="time"/>
                            <?php for ($i = 0; $i < 15; $i++): ?>
                                <option value="<?php echo $i ?>"><?php echo $i; ?></option>
    <?php endfor; ?> </select ></td>
                            </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><input  type="submit" value="  Aprobar   " /></td>
                                    <td><a href="<?php echo url_for('carrera/rechazarCarrera?id=' . $solicitud_carrera->getId()) ?>" >Rechazar</a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form></td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table>


<h1>Carreras en Proceso</h1>  

<table class="carreras">    
    <thead>
        <tr class="head">
            <th>N°</th>
            <th>Código</th>
            <th>Unidad</th>
            <th>Tiempo </th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Acciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($carreras as $i => $carrera): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <td class="td"><a target="_blank" href="<?php echo url_for('carrera/show?id=' . $carrera->getId()) ?>"><?php echo ($i + 1) ?></a></td>
                <td class="position"><a target="_blank" href="<?php echo $carrera->getLinkCodigo() ?>"><?php echo $carrera->getNumCodigo() ?></a></td>
                <td class="position"><?php echo $carrera->getVehiculo() ?></td>
                <td class="position"><?php echo $carrera->getTiempo() . ' min' ?></td>                   
                <td class="position"><?php echo $carrera->getFecha() ?></td>
                <td class="position"><?php echo $carrera->getHora() ?></td>
                <td class="company">    
                    <ul>
                        <li class="c" ><a href="<?php echo url_for('carrera/completar?id=' . $carrera->getId()); ?>">Completar</a></li>
                        <li class="x" ><a href="<?php echo url_for('carrera/cancelar?id=' . $carrera->getId()); ?>">Cancelar</a></li>
                    </ul>
                </td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table>
<hr />
