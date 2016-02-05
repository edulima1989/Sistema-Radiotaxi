<?php

/**
 * Vehiculo filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehiculoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_propietario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Propietario'), 'add_empty' => true)),
      'id_sector'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'numero'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'placa'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modelo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ano'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_propietario' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Propietario'), 'column' => 'id')),
      'id_sector'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sector'), 'column' => 'id')),
      'numero'         => new sfValidatorPass(array('required' => false)),
      'placa'          => new sfValidatorPass(array('required' => false)),
      'marca'          => new sfValidatorPass(array('required' => false)),
      'modelo'         => new sfValidatorPass(array('required' => false)),
      'ano'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehiculo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vehiculo';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'id_propietario' => 'ForeignKey',
      'id_sector'      => 'ForeignKey',
      'numero'         => 'Text',
      'placa'          => 'Text',
      'marca'          => 'Text',
      'modelo'         => 'Text',
      'ano'            => 'Text',
    );
  }
}
