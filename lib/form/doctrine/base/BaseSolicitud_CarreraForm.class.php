<?php

/**
 * Solicitud_Carrera form base class.
 *
 * @method Solicitud_Carrera getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSolicitud_CarreraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'id_codigo'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => false)),
      'id_cliente'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'estado'       => new sfWidgetFormChoice(array('choices' => array('solicitada' => 'solicitada', 'aprovada' => 'aprovada', 'negada' => 'negada', 'cancelada' => 'cancelada'))),
      'tiempo'       => new sfWidgetFormInputText(),
      'detalle'      => new sfWidgetFormTextarea(),
      'fecha'        => new sfWidgetFormDate(),
      'hora'         => new sfWidgetFormTime(),
      'notificacion' => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_codigo'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'))),
      'id_cliente'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'estado'       => new sfValidatorChoice(array('choices' => array(0 => 'solicitada', 1 => 'aprovada', 2 => 'negada', 3 => 'cancelada'), 'required' => false)),
      'tiempo'       => new sfValidatorInteger(),
      'detalle'      => new sfValidatorString(array('required' => false)),
      'fecha'        => new sfValidatorDate(),
      'hora'         => new sfValidatorTime(),
      'notificacion' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('solicitud_carrera[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Solicitud_Carrera';
  }

}
