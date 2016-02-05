<?php

/**
 * Carrera form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CarreraForm extends BaseCarreraForm {

    public static function listMinutos() {
        $minutos = array();
        for ($i = 0; $i < 15; $i++) {
            $minutos[$i] = $i;
        }
        return $minutos;
    }

    public function configure() {
        
        $this->useFields(array('detalle','tiempo'));
        $this->widgetSchema['tiempo'] = new sfWidgetFormChoice(array('choices' => $this::listMinutos(),
                ));

        $this->validatorSchema['tiempo'] = new sfValidatorChoice(array(
                    'choices' => array_keys($this::listMinutos()), 'required' => true
                ));

        $this->widgetSchema->setLabels(array(
            'tiempo' => 'Tiempo de espera(min): ',
            'detalle' => 'Detalle:'
        ));
    }
}
