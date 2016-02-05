<?php

/**
 * Carrera form base class.
 *
 * @method Carrera getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCarreraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_operador'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'id_codigo'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => true)),
      'id_vehiculo'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehiculo'), 'add_empty' => false)),
      'id_sincodigo'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sin_Codigo'), 'add_empty' => true)),
      'tiempo'            => new sfWidgetFormInputText(),
      'detalle'           => new sfWidgetFormTextarea(),
      'fecha'             => new sfWidgetFormDate(),
      'hora'              => new sfWidgetFormTime(),
      'estado'            => new sfWidgetFormChoice(array('choices' => array('cancelada' => 'cancelada', 'completada' => 'completada', 'espera' => 'espera', 'solicitada' => 'solicitada'))),
      'tiempo_atencion'   => new sfWidgetFormInputText(),
      'destino'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'horaat'            => new sfWidgetFormTime(),
      'tiempo_aprox_dest' => new sfWidgetFormInputText(),
      'hora_dest'         => new sfWidgetFormTime(),
      'calidad'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_operador'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'id_codigo'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'required' => false)),
      'id_vehiculo'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehiculo'))),
      'id_sincodigo'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sin_Codigo'), 'required' => false)),
      'tiempo'            => new sfValidatorInteger(),
      'detalle'           => new sfValidatorString(array('required' => false)),
      'fecha'             => new sfValidatorDate(),
      'hora'              => new sfValidatorTime(),
      'estado'            => new sfValidatorChoice(array('choices' => array(0 => 'cancelada', 1 => 'completada', 2 => 'espera', 3 => 'solicitada'), 'required' => false)),
      'tiempo_atencion'   => new sfValidatorInteger(array('required' => false)),
      'destino'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'required' => false)),
      'horaat'            => new sfValidatorTime(array('required' => false)),
      'tiempo_aprox_dest' => new sfValidatorInteger(array('required' => false)),
      'hora_dest'         => new sfValidatorTime(array('required' => false)),
      'calidad'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('carrera[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Carrera';
  }

}
