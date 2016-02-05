<?php

/**
 * Propietario form base class.
 *
 * @method Propietario getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePropietarioForm extends PersonaForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['cedula'] = new sfWidgetFormInputText();
    $this->validatorSchema['cedula'] = new sfValidatorString(array('max_length' => 10));

    $this->widgetSchema   ['licencia'] = new sfWidgetFormInputText();
    $this->validatorSchema['licencia'] = new sfValidatorString(array('max_length' => 20, 'required' => false));

    $this->widgetSchema->setNameFormat('propietario[%s]');
  }

  public function getModelName()
  {
    return 'Propietario';
  }

}
