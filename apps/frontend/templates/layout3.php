<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>SISTEMA DE RADIO-TAXI  "COOPERATIVA BENJAMÍN CARRIÓN"</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
    </head>
    <body >
        <div id="container">
            <div id="headeradmin">  
            </div>
            <div id="content">
                <div class="content">
                    <?php echo $sf_content ?>
                </div>
            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>