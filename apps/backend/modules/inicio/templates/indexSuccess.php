<h1><?php echo sfContext::getInstance()->getUser()->getGuardUser()->getFirstName() . " " .
        sfContext::getInstance()->getUser()->getGuardUser()->getLastName() ?></h1>  
<p>
 Bienvenido a la administración del  sistema informático de gestión de servicios de radio-taxi de la Cooperativa de Taxis “Benjamín Carrión”.
</p>
<br /><br />
<a id="linkenviar" href="<?php echo url_for('usuario/show?id=' . sfContext::getInstance()->getUser()->getGuardUser()->getID()) ?>">Usuario</a>