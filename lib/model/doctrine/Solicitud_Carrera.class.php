<?php

/**
 * Solicitud_Carrera
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    radiotaxi
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Solicitud_Carrera extends BaseSolicitud_Carrera {

    public function getLinkCodigo() {
            return url_for('codigo/datos?id=' . $this->getIdCodigo());
    }
    public function getBarrio() {
            return $this->getCodigo()->getSector()->getNombre();
    }
}