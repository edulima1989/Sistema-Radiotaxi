<?php

/**
 * Solicitud_Carrera filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSolicitud_CarreraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_codigo'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => true)),
      'id_cliente'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'estado'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'solicitada' => 'solicitada', 'aprovada' => 'aprovada', 'negada' => 'negada', 'cancelada' => 'cancelada'))),
      'tiempo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'detalle'      => new sfWidgetFormFilterInput(),
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notificacion' => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_codigo'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Codigo'), 'column' => 'id')),
      'id_cliente'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'estado'       => new sfValidatorChoice(array('required' => false, 'choices' => array('solicitada' => 'solicitada', 'aprovada' => 'aprovada', 'negada' => 'negada', 'cancelada' => 'cancelada'))),
      'tiempo'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'detalle'      => new sfValidatorPass(array('required' => false)),
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'         => new sfValidatorPass(array('required' => false)),
      'notificacion' => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('solicitud_carrera_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Solicitud_Carrera';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_codigo'    => 'ForeignKey',
      'id_cliente'   => 'ForeignKey',
      'estado'       => 'Enum',
      'tiempo'       => 'Number',
      'detalle'      => 'Text',
      'fecha'        => 'Date',
      'hora'         => 'Text',
      'notificacion' => 'Text',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
