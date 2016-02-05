<?php

/**
 * Sin_Codigo form base class.
 *
 * @method Sin_Codigo getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSin_CodigoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'cliente'     => new sfWidgetFormInputText(),
      'telefono'    => new sfWidgetFormInputText(),
      'barrio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'calle1'      => new sfWidgetFormInputText(),
      'calle2'      => new sfWidgetFormInputText(),
      'numCasa'     => new sfWidgetFormInputText(),
      'observacion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cliente'     => new sfValidatorString(array('max_length' => 50)),
      'telefono'    => new sfValidatorString(array('max_length' => 10)),
      'barrio'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'required' => false)),
      'calle1'      => new sfValidatorString(array('max_length' => 50)),
      'calle2'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'numCasa'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'observacion' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sin_codigo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sin_Codigo';
  }

}
