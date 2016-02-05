<?php

/**
 * Vehiculo filter form.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VehiculoFormFilter extends BaseVehiculoFormFilter {

    public function configure() {
        $this->widgetSchema['id_propietario'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Propietario'), 'add_empty' => 'Seleccione un propietario...'));
    }

}
