<?php

/**
 * Reservacion form base class.
 *
 * @method Reservacion getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReservacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'id_codigo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => false)),
      'lunes'     => new sfWidgetFormInputCheckbox(),
      'martes'    => new sfWidgetFormInputCheckbox(),
      'miercoles' => new sfWidgetFormInputCheckbox(),
      'jueves'    => new sfWidgetFormInputCheckbox(),
      'viernes'   => new sfWidgetFormInputCheckbox(),
      'sabado'    => new sfWidgetFormInputCheckbox(),
      'domingo'   => new sfWidgetFormInputCheckbox(),
      'horario1'  => new sfWidgetFormTime(),
      'horario2'  => new sfWidgetFormTime(),
      'horario3'  => new sfWidgetFormTime(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_codigo' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'))),
      'lunes'     => new sfValidatorBoolean(array('required' => false)),
      'martes'    => new sfValidatorBoolean(array('required' => false)),
      'miercoles' => new sfValidatorBoolean(array('required' => false)),
      'jueves'    => new sfValidatorBoolean(array('required' => false)),
      'viernes'   => new sfValidatorBoolean(array('required' => false)),
      'sabado'    => new sfValidatorBoolean(array('required' => false)),
      'domingo'   => new sfValidatorBoolean(array('required' => false)),
      'horario1'  => new sfValidatorTime(),
      'horario2'  => new sfValidatorTime(array('required' => false)),
      'horario3'  => new sfValidatorTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reservacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reservacion';
  }

}
