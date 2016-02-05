<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>SISTEMA DE RADIO-TAXI  "COOPERATIVA BENJAMÍN CARRIÓN"  </title>
        <script language="javascript" type="text/javascript">
            //Detectando navegadores....
            var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
            var is_opera = navigator.userAgent.toLowerCase().indexOf('opera/') > -1;
            var is_chrome= navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
            var ie=(document.all)? true:false;
            var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;

            if((is_safari||is_opera||ie)!=is_chrome){
                if(ie!=is_chrome){
                    alert("Incompatibilidad del navegador detectada");
                    var pagina = '<?php echo url_for('Redirecciones/internet') ?>';
                    var segundos = 0.1;
                    document.location.href=pagina;
                    setTimeout("redireccion()",segundos); 
                }else{
                    alert("Incompatibilidad del navegador detectada");
                    var pagina = '<?php echo url_for('Redirecciones/index') ?>';
                    var segundos = 0.1;
                    document.location.href=pagina;
                    setTimeout("redireccion",segundos); 
                }
 
            }else{
    
            }
        </script>
        <script type="text/javascript">
            var rootPath = '<?php echo $sf_request->getScriptName(), '/' ?>';
        </script>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php use_stylesheet('admin.css') ?>
        <?php use_stylesheet('central/sector.css') ?>
        <?php include_stylesheets() ?>

    </head>
    <body onload="iniciar();">

        <div id="container">
            <a href="<?php echo url_for('@homepage') ?>"><div id="header">
                </div></a>
            <div id="menu">
                <ul>
                    <li>
                        <?php echo link_to('Propietarios', 'propietario') ?>
                    </li>
                    <li>
                        <?php echo link_to('Unidades', 'vehiculo') ?>
                    </li>
                    <li>
                        <?php echo link_to('Códigos', 'codigo') ?>
                    </li>
                    <li>
                        <?php echo link_to('Usuarios', 'sf_guard_user') ?>
                    </li>                    
                    <li>
                        <?php echo link_to('Solicitudes de Usuario', 'peticion') ?>
                    </li>
                    <li>
                        <?php echo link_to('Solicitudes de Códigos', 'peticion_codigo') ?>
                    </li>
                    <li>
                        <a href="<?php echo url_for('seguridad/respaldo') ?>">Respaldos</a>
                    </li>
                    <li>
                        <?php echo link_to('Cerrar Sesión', 'sf_guard_signout') ?>
                    </li>
                </ul>
            </div>
            <div id="content">
                <?php echo $sf_content ?>
            </div>
        </div>
        <div id="footer">
        </div>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/js/codigoadmin.js"></script>
        <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
        <?php include_javascripts() ?>
    </body>
</html>