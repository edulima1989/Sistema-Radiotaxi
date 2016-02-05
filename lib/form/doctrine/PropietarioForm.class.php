<?php

/**
 * Propietario form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PropietarioForm extends BasePropietarioForm {

    /**
     * @see PersonaForm
     */
    public function configure() {
        parent::configure();
        
         $this->useFields(array('cedula','first_name','last_name','licencia','telefono','telefonoMovil'
             ,'sexo','direccion'));
         
         $this->validatorSchema['cedula']= new sfValidatorAnd(array(
            $this->validatorSchema['cedula'], new sfValidatorNumber()
         ));
         $this->validatorSchema->setPostValidator(
                new sfValidatorDoctrineUnique(array('model' => 'Propietario', 'column' => array('cedula')))
        );
           $this->widgetSchema->setLabels(array(
            'licencia' => 'Licencia: <b style="color: red;">*</b>',
            'cedula'   => 'Cédula: <b style="color: red;">*</b>',
        )); 
           
    }
}
