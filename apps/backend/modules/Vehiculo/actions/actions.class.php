<?php

require_once dirname(__FILE__) . '/../lib/VehiculoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/VehiculoGeneratorHelper.class.php';

/**
 * Vehiculo actions.
 *
 * @package    radiotaxi
 * @subpackage Vehiculo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VehiculoActions extends autoVehiculoActions {

    public function executeEdit(sfWebRequest $request) {
        $this->vehiculo = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->vehiculo);
        $this->carreras = Doctrine_Core::getTable('carrera')
                ->createQuery('a')->where('a.id_vehiculo=?', $this->vehiculo->getId())
                ->limit(2)
                ->execute();
    }

}
