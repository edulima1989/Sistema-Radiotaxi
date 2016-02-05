<?php

/**
 * Peticion_Codigo form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Peticion_CodigoForm extends BasePeticion_CodigoForm
{
  /**
   * @see CodigoForm
   */
  public function configure()
  {
    parent::configure();
    $this->useFields(array('barrio', 'calle1', 'calle2', 'numCasa', 'observacion'));

     
  }
}
