<?php

/**
 * Peticion form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PeticionForm extends BasePeticionForm
{
  /**
   * @see PersonaForm
   */
  public function configure()
  {
    parent::configure();
    $this->useFields(array('first_name', 'last_name', 'username' , 'email_address', 'sexo', 'direccion', 'telefono', 'telefonoMovil'));

  }
}
