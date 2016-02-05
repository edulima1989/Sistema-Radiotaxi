<style>
    li.report{
        padding-left: 20px;
        padding-top: 5px;
        background: url(../images/reporte.png) center left no-repeat;
    }
    ul{
        padding-left: 40px;
    }
</style>
<h1>Reportes</h1>
<ul >
    <li class="report"><a href="<?php echo url_for('reportes/porunidad') ?>">Reporte de carreras por unidad</a>
    </li>
    <li class="report"><a href="<?php echo url_for('reportes/porcodigo') ?>">Reporte de carreras por código</a>
    </li>
    <li class="report"><a href="<?php echo url_for('reportes/poroperador') ?>">Reporte de carreras por operador</a>
    </li>
    <li class="report"><a href="<?php echo url_for('reportes/calidad_Servicio') ?>">Informe de Calidad de Servicio</a>
    </li>
    <li class="report"><a href="<?php echo url_for('reportes/informe_General') ?>">Informe General</a>
    </li>
</ul>