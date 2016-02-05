<?php

/**
 * Persona form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonaForm extends BasePersonaForm {

    protected static $sexo = array(
        'M' => 'Masculino',
        'F' => 'Femenino',
    );

    public function getSexo() {
        return self::$sexo;
    }

    public function configure() {
        $this->widgetSchema['sexo'] = new sfWidgetFormChoice(array('choices' => $this->getSexo(),
                    'multiple' => false, 'expanded' => true,
                ));
        $this->validatorSchema['sexo'] = new sfValidatorChoice(array('choices' => array_keys($this->getSexo()), 'required' => true));
        
        $this->validatorSchema['telefono']= new sfValidatorAnd(array(
                    $this->validatorSchema['telefono'],
                    new sfValidatorNumber(),
                ));
        $this->validatorSchema['telefonoMovil']= new sfValidatorAnd(array(
                    $this->validatorSchema['telefonoMovil'],
                    new sfValidatorNumber(),
                ),array('required' => false));
        
        $this->widgetSchema->setLabels(array(
            'first_name'    => 'Nombre: <b style="color: red;">*</b>',
            'last_name'     => 'Apellido: <b style="color: red;">*</b>',
            'telefonoMovil' => 'Celular: ',
            'telefono'      => 'Telefono: <b style="color: red;">*</b>',
            'direccion'     => 'Dirección: ',
            'sexo'          => 'Genero: <b style="color: red;">*</b>'
        ));
    }

}
