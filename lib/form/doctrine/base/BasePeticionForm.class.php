<?php

/**
 * Peticion form base class.
 *
 * @method Peticion getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePeticionForm extends sfGuardUserForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('peticion[%s]');
  }

  public function getModelName()
  {
    return 'Peticion';
  }

}
