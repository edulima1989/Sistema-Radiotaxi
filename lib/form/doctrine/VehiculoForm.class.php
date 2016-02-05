<?php

/**
 * Vehiculo form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VehiculoForm extends BaseVehiculoForm {

    public function listaAnos() {
        $fecha = date("Y");
        $fechas = array();
        for ($i = 0; $i < 10; $i++) {
            $fechas[$fecha] = $fecha;
            $fecha = $fecha - 1;
        }
        return $fechas;
    }

    public function configure() {
        unset(
                $this['id_sector']
        );

        $this->validatorSchema['numero'] = new sfValidatorAnd(array(
                    $this->validatorSchema['numero'],
                    new sfValidatorNumber(),
                ));

        $this->widgetSchema['ano'] = new sfWidgetFormChoice(array('choices' => $this->listaAnos(),
                ));
        $this->widgetSchema['id_propietario'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Propietario'), 'add_empty' => 'Seleccione un propietario...'));

        $this->validatorSchema['ano'] = new sfValidatorChoice(array(
                    'choices' => array_keys($this->listaAnos()), 'required' => true
                ));
        $this->widgetSchema->setLabels(array(
            'id_propietario' => 'Propietario: <b style="color: red;">*</b>',
            'numero' => 'N°- de unidad: <b style="color: red;">*</b>',
            'ano' => 'Año: <b style="color: red;">*</b>',
            'placa' => 'Placa: <b style="color: red;">*</b>',
            'marca' => 'Marca: <b style="color: red;">*</b>',
            'modelo' => 'Modelo: <b style="color: red;">*</b>'
        ));
    }

}
