<?php

/**
 * Propietario filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePropietarioFormFilter extends PersonaFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['cedula'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['cedula'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['licencia'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['licencia'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('propietario_filters[%s]');
  }

  public function getModelName()
  {
    return 'Propietario';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'cedula' => 'Text',
      'licencia' => 'Text',
    ));
  }
}
