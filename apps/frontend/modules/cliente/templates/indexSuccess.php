<h1>Listado de Clientes</h1>
<form id="gestion" action="" method="post">
    <label>Seleccione el criterio de busqueda:</label>
    <br />
    <input type="radio" id="radio1" name="group1" value="apellido" <?php echo $checkedR1?>> Apellido
    <input type="radio" id="radio2" name="group1" value="telefono" <?php echo $checkedR2?>> Teléfono
<hr />
<div class="apellido">
    <label>Ingrese el apellido del cliente que desea buscar:</label>
    <table>
        <tr>
            <td><b>Apellido:</b></td>
            <td><input type="search" name="apellido" value="<?php echo $apellido; ?>"/></td>
        </tr>
    </table>
</div>
<div class="telefono">
    <label>Ingrese el teléfono del cliente que desea buscar:</label>
    <table>
        <tr>
            <td><b>Teléfono:</b></td>
            <td><input type="search" name="telefono" value="<?php echo $telefono; ?>"/></td>
        </tr>
    </table>
</div>
    <hr />
    <input type="submit" value="Buscar"/>
</form>
<div class="table_show">    
<hr />
</div>
<table class="table">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td class="td"><a href="<?php echo url_for('cliente/show?id=' . $cliente->getId()) ?>"><?php echo $cliente ?></a></td>
                <td class="td"><?php echo $cliente->getTelefono() ?></td>
                <td class="td"><?php echo $cliente->getTelefonoMovil() ?></td>
                <td class="td"><?php echo ($cliente->getSexo()== 'F'? 'Femenino':'Masculino') ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="table_show">
<hr />
<a href="<?php echo url_for('cliente/new') ?>">Nuevo Cliente</a>
</div>