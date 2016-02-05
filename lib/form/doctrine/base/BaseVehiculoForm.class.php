<?php

/**
 * Vehiculo form base class.
 *
 * @method Vehiculo getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVehiculoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'id_propietario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Propietario'), 'add_empty' => false)),
      'id_sector'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'numero'         => new sfWidgetFormInputText(),
      'placa'          => new sfWidgetFormInputText(),
      'marca'          => new sfWidgetFormInputText(),
      'modelo'         => new sfWidgetFormInputText(),
      'ano'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_propietario' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Propietario'))),
      'id_sector'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'required' => false)),
      'numero'         => new sfValidatorString(array('max_length' => 10)),
      'placa'          => new sfValidatorString(array('max_length' => 7)),
      'marca'          => new sfValidatorString(array('max_length' => 20)),
      'modelo'         => new sfValidatorString(array('max_length' => 20)),
      'ano'            => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Vehiculo', 'column' => array('numero'))),
        new sfValidatorDoctrineUnique(array('model' => 'Vehiculo', 'column' => array('placa'))),
      ))
    );

    $this->widgetSchema->setNameFormat('vehiculo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehiculo';
  }

}
