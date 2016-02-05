<?php

require_once dirname(__FILE__) . '/../lib/PropietarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/PropietarioGeneratorHelper.class.php';

/**
 * Propietario actions.
 *
 * @package    radiotaxi
 * @subpackage Propietario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PropietarioActions extends autoPropietarioActions {

    public function executeEdit(sfWebRequest $request) {
        $this->propietario = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->propietario);
            $this->unidades = Doctrine_Core::getTable('vehiculo')
                    ->createQuery('a')->where('a.id_propietario=?', $this->propietario->getId())
                    ->limit(2)
                    ->execute();
    }

}
