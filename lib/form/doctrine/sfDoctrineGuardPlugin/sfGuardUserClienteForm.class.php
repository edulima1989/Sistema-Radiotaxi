<?php

/**
 * sfGuardUser form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserClienteForm extends PluginsfGuardUserForm {

    protected static $subjects = array(
        'M' => 'Masculino',
        'F' => 'Femenino',
    );

    public function configure() {
        $this->useFields(array('first_name', 'last_name', 'email_address', 'sexo', 'direccion', 'telefono', 'telefonoMovil'));
        $this->widgetSchema ['first_name'] = new sfWidgetFormInputText();
        $this->widgetSchema ['last_name'] = new sfWidgetFormInputText();
        $this->widgetSchema ['email_address'] = new sfWidgetFormInputText();
        $this->widgetSchema ['sexo'] = new sfWidgetFormSelect(array('choices' => self::$subjects));
        $this->widgetSchema ['direccion'] = new sfWidgetFormInputText();
        $this->widgetSchema ['telefono'] = new sfWidgetFormInputText();
        $this->widgetSchema ['telefonoMovil'] = new sfWidgetFormInputText();


        $this->validatorSchema['first_name'] = new sfValidatorString(array('max_length' => 25));
        $this->validatorSchema['last_name'] = new sfValidatorString(array('max_length' => 25));
        $this->validatorSchema['email_address'] = new sfValidatorString(array('max_length' => 255));
        $this->validatorSchema['sexo'] = new sfValidatorChoice(array('choices' => array_keys(self::$subjects)));
        $this->validatorSchema['direccion'] = new sfValidatorString(array('max_length' => 30));
        $this->validatorSchema['telefono'] = new sfValidatorAnd(array($this->validatorSchema['telefono'], new sfValidatorNumber()));
        $this->validatorSchema['telefonoMovil'] = new sfValidatorAnd(array(
                    $this->validatorSchema['telefonoMovil'], new sfValidatorNumber()),
                        array('required' => false));

        $this->widgetSchema->setLabels(array(
            'first_name' => 'Nombres: <b style="color: red;">*</b>',
            'last_name' => 'Apellidos: <b style="color: red;">*</b>',
            'email_address' => 'Correo (Gmail): <b style="color: red;">*</b>',
            'sexo' => 'Género: <b style="color: red;">*</b>',
            'direccion' => 'Dirección: <b style="color: red;">*</b>',
            'telefono' => 'Teléfono: <b style="color: red;">*</b>',
            'telefonoMovil' => 'Celular: ',
        ));
    }

}
