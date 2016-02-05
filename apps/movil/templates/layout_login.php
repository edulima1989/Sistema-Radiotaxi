<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_stylesheets() ?>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="author" type="text/plain" href="humans.txt   "/>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<!--        <link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />-->
        <?php include_title() ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
                !window.jQuery && document.write('<script src="js/jquery.min.js"> <\/script>');
        </script>
        <?php include_javascripts() ?>
        <script type="text/javascript">
            $(document).ready(function($){
                $('#accordion-1').dcAccordion({
                    eventType: 'click',
                    autoClose: true,
                    saveState: true,
                    disableLink: true,
                    speed: 'slow',
                    showCount: true,
                    autoExpand: false,
                    cookie	: 'dcjq-accordion-1',
                    classExpand : 'dcjq-current-parent'
                });
            });
        </script>    
    </head>
    <body>
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
        <header>
            
            <h1>
                <a href="<?php echo url_for('@homepage')?>">
                    <img class="fade" alt="radiotaxi.com | servicio de radiotaxi en linea." src="../../../images/movil/head-movil.jpg"/>
                </a>
            </h1>
            <nav>
                <?php echo $sf_content ?>
            </nav>
        </header>

        <footer>
            Cooperativa de taxis "Benjamín Carrión"
        </footer>

    </body>
</html>
