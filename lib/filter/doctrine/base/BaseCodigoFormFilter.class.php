<?php

/**
 * Codigo filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCodigoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'id_cliente'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'numero'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'barrio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'calle1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calle2'      => new sfWidgetFormFilterInput(),
      'numCasa'     => new sfWidgetFormFilterInput(),
      'observacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitud'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitud'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_user'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'id_cliente'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cliente'), 'column' => 'id')),
      'numero'      => new sfValidatorPass(array('required' => false)),
      'barrio'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sector'), 'column' => 'id')),
      'calle1'      => new sfValidatorPass(array('required' => false)),
      'calle2'      => new sfValidatorPass(array('required' => false)),
      'numCasa'     => new sfValidatorPass(array('required' => false)),
      'observacion' => new sfValidatorPass(array('required' => false)),
      'latitud'     => new sfValidatorPass(array('required' => false)),
      'longitud'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('codigo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Codigo';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'id_user'     => 'ForeignKey',
      'id_cliente'  => 'ForeignKey',
      'numero'      => 'Text',
      'barrio'      => 'ForeignKey',
      'calle1'      => 'Text',
      'calle2'      => 'Text',
      'numCasa'     => 'Text',
      'observacion' => 'Text',
      'latitud'     => 'Text',
      'longitud'    => 'Text',
    );
  }
}
