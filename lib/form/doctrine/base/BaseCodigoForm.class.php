<?php

/**
 * Codigo form base class.
 *
 * @method Codigo getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCodigoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_user'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'id_cliente'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'numero'      => new sfWidgetFormInputText(),
      'barrio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => false)),
      'calle1'      => new sfWidgetFormInputText(),
      'calle2'      => new sfWidgetFormInputText(),
      'numCasa'     => new sfWidgetFormInputText(),
      'observacion' => new sfWidgetFormTextarea(),
      'latitud'     => new sfWidgetFormInputText(),
      'longitud'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_user'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'id_cliente'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
      'numero'      => new sfValidatorString(array('max_length' => 5)),
      'barrio'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'))),
      'calle1'      => new sfValidatorString(array('max_length' => 50)),
      'calle2'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'numCasa'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'observacion' => new sfValidatorString(),
      'latitud'     => new sfValidatorString(array('max_length' => 50)),
      'longitud'    => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Codigo', 'column' => array('numero')))
    );

    $this->widgetSchema->setNameFormat('codigo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Codigo';
  }

}
