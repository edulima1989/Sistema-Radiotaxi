<?php

/**
 * Peticion_Codigo form base class.
 *
 * @method Peticion_Codigo getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePeticion_CodigoForm extends CodigoForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('peticion_codigo[%s]');
  }

  public function getModelName()
  {
    return 'Peticion_Codigo';
  }

}
