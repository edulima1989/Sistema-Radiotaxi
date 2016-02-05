<?php

/**
 * Sin_Codigo filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSin_CodigoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cliente'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'barrio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'calle1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calle2'      => new sfWidgetFormFilterInput(),
      'numCasa'     => new sfWidgetFormFilterInput(),
      'observacion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cliente'     => new sfValidatorPass(array('required' => false)),
      'telefono'    => new sfValidatorPass(array('required' => false)),
      'barrio'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sector'), 'column' => 'id')),
      'calle1'      => new sfValidatorPass(array('required' => false)),
      'calle2'      => new sfValidatorPass(array('required' => false)),
      'numCasa'     => new sfValidatorPass(array('required' => false)),
      'observacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sin_codigo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sin_Codigo';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'cliente'     => 'Text',
      'telefono'    => 'Text',
      'barrio'      => 'ForeignKey',
      'calle1'      => 'Text',
      'calle2'      => 'Text',
      'numCasa'     => 'Text',
      'observacion' => 'Text',
    );
  }
}
