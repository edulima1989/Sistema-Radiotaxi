<?php

/**
 * Peticion_Codigo filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePeticion_CodigoFormFilter extends CodigoFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('peticion_codigo_filters[%s]');
  }

  public function getModelName()
  {
    return 'Peticion_Codigo';
  }
}
