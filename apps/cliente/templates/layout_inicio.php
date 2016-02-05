<?php
// Si el NAVEGADOR WEB del cliente es un MÓVIL
if (preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i', substr($_SERVER['HTTP_USER_AGENT'], 0, 4))) {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/movil.php");
    exit;
}
?>    
<!DOCTYPE  html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>SISTEMA DE RADIO-TAXI  "COOPERATIVA BENJAMÍN CARRIÓN"</title>
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
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>        
        <link rel="stylesheet" href="/css/cliente/flexslider.css" type="text/css"/>
        <link rel="stylesheet" href="/css/cliente/menu.css" type="text/css"/>
        <link rel="stylesheet" href="/css/reveal.css" type="text/css"/>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="/js/jquery.reveal.js"></script>
        <script type="text/javascript" src="/js/cliente.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                jQuery('.flexslider').flexslider();
                animation: "slide";
            });
        </script>
    </head>
    <body onload="inicio();">
        <div id="border">
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
            <div id="center">
                <div style="width:450px; float:left;"><a href="<?php echo url_for('@homepage') ?>"><div id="logo">Cooperativa de Taxis "Benjamín Carrión"</div></a>
                </div>
                <div style="width:450px; float:left; margin-top:78px;">
                    <?php if ($sf_user->isAuthenticated() && $sf_user->hasCredential('cliente')): ?>
                        <div class="toplinks"><a href="<?php echo url_for('usuario/show?id=' . sfContext::getInstance()->getUser()->getGuardUser()->getID()) ?>">Usuario</a></div>
                    <?php else: ?>
                        <div class="toplinks"><a  data-reveal-id="login-user-modal" href="">Ingresar</a></div>
                    <?php endif; ?>
                    <div class="sap2"></div>
                    <div class="toplinks"><a href="<?php echo url_for('informacion/contactenos') ?>">Contáctenos</a></div>
                    <div class="sap2"></div>
                    <div class="toplinks"><a href="<?php echo url_for('informacion/servicios') ?>">Servicios</a></div>
                    <div class="sap2"></div>                    
                    <div class="toplinks"><a href="<?php echo url_for('@homepage') ?>">Inicio</a></div>
                </div>
            </div>

            <?php if ($sf_user->isAuthenticated() && $sf_user->hasCredential('cliente')): ?>

                <div id="menu-horizontal"   > 
                    <ul id="nav"> 
                        <li><a href="">Códigos</a> 
                            <ul>
                                <li><a href="<?php echo url_for('codigo/index') ?>">Lista de Códigos</a></li>
                                <li><a href="<?php echo url_for('solicitarCodigo/new') ?>">Solicitar Código</a></li> 
                            </ul>
                        </li>
                        <li><a href="">Servicio</a> 
                            <ul> 
                                <li><a href="<?php echo url_for('carreraPeticion/new') ?>">Solicitar Carrera</a></li> 
                                <li><a href="<?php echo url_for('carreraPeticion/index') ?>">Lista de Solicitudes</a></li> 
                            </ul> 
                        </li> 
                        <li id="user"><?php echo sfContext::getInstance()->getUser()->getGuardUser() ?></li>
                        <li><a href="">Inicio</a> 
                            <ul> 
                                <li><a href="<?php echo url_for('usuario/show?id=' . sfContext::getInstance()->getUser()->getGuardUser()->getID()) ?>">Usuario</a></li> 
                                <li><a href="<?php echo url_for('sfGuardAuth/signout') ?>">Salir</a></li>  
                            </ul> 
                        </li>
                    </ul>
                </div>


            <?php endif; ?>

            <div id="mainarea">
                <div style="height:5px; font-size:1px; clear:left;"></div>
                <div id="header">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="../../../../images/cliente/loja1.jpg" />
                            </li>
                            <li>
                                <img src="../../../../images/cliente/loja2.jpg" />
                            </li>
                            <li>
                                <img src="../../../../images/cliente/loja3.jpg" />
                            </li>
                            <li>
                                <img src="../../../../images/cliente/loja4.jpg" />
                            </li>
                        </ul>
                    </div>

                </div>
                <div id="<?php
            if ($sf_user->isAuthenticated() && $sf_user->hasCredential('cliente')): echo 'content';
            else: echo 'content3';
            endif;
            ?>">
                         <?php echo $sf_content ?>
                </div>

                <?php if ($sf_user->isAuthenticated() && $sf_user->hasCredential('cliente')): ?>

                    <div id="content2" >
                        <ul class="vertical-list">
                            <h1> OPCIONES   </h1>
                            <li><a href='<?php echo url_for('carreraPeticion/new') ?>' class='button' >Solicitar Carrera</a></li>
                            <li><a href='<?php echo url_for('solicitarCodigo/new') ?>' class='button' >Solicitar Código</a></li>
                            <li><a href='<?php echo url_for('usuario/show?id=' . sfContext::getInstance()->getUser()->getGuardUser()->getID()) ?>' class='button' >Información de Usuario</a></li>
                            <li><a href='<?php echo url_for('sfGuardAuth/signout') ?>' class='button' >SALIR</a></li>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>
            <div id="footer">
                <div class="bottomline"></div>
                <div id="bottom">
                    <div class="bottomlink"><a href="<?php echo url_for('@homepage') ?>">Inicio</a></div>
                    <div class="sap">|</div>
                    <div class="bottomlink"><a href="<?php echo url_for('informacion/servicios') ?>">Servicios</a></div>
                    <div class="sap">|</div>
                    <div class="bottomlink"><a href="<?php echo url_for('informacion/contactenos') ?>">Contáctenos</a></div>
                    <div class="sap">|</div>                
                    <?php if ($sf_user->isAuthenticated() && $sf_user->hasCredential('cliente')): ?>
                        <div class="bottomlink"><a href="<?php echo url_for('usuario/show?id=' . sfContext::getInstance()->getUser()->getGuardUser()->getID()) ?>">Usuario</a></div>
                    <?php else: ?>
                        <div class="bottomlink"><a data-reveal-id="login-user-modal" href="">Ingresar</a></div>
                    <?php endif; ?>
                    <div id="hora-actual"></div>
                </div>
            </div>
        </div>
        <?php if (!$sf_user->isAuthenticated()): ?>
            <div id="login-user-modal" class="reveal-modal">
                <div align="center">
                    <?php include_partial('sfGuardAuth/signin_form', array('form' => new sfGuardFormSignin())) ?>
                </div>
            </div>        
        <?php endif; ?>
    </body>
</html>
