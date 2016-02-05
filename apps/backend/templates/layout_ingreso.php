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

        <link rel="shortcut icon" href="/favicon.ico" />
        <?php use_stylesheet('admin.css') ?>
        <?php include_stylesheets() ?>
    </head>
    <body>
       
        <div id="container">
             <?php if ($sf_user->hasFlash('notice')): ?>
            <div class="flash_notice">
                <?php echo $sf_user->getFlash('notice') ?>
            </div>
        <?php endif; ?>

        <?php if ($sf_user->hasFlash('error')): ?>
            <div class="flash_error">
                <?php echo $sf_user->getFlash('error') ?>
            </div>
        <?php endif; ?>
            <a href="<?php echo url_for('@homepage')?>"><div id="header">
            </div></a>
            <div id="content">
                <?php echo $sf_content ?>
            </div>


        </div>
        <div id="footer">
        </div>
        <?php include_javascripts() ?>
    </body>
</html>