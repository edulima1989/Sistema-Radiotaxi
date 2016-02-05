<?php

/**
 * Carrera filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCarreraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_operador'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'id_codigo'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => true)),
      'id_vehiculo'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehiculo'), 'add_empty' => true)),
      'id_sincodigo'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sin_Codigo'), 'add_empty' => true)),
      'tiempo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'detalle'           => new sfWidgetFormFilterInput(),
      'fecha'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'            => new sfWidgetFormChoice(array('choices' => array('' => '', 'cancelada' => 'cancelada', 'completada' => 'completada', 'espera' => 'espera', 'solicitada' => 'solicitada'))),
      'tiempo_atencion'   => new sfWidgetFormFilterInput(),
      'destino'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'horaat'            => new sfWidgetFormFilterInput(),
      'tiempo_aprox_dest' => new sfWidgetFormFilterInput(),
      'hora_dest'         => new sfWidgetFormFilterInput(),
      'calidad'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_operador'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'id_codigo'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Codigo'), 'column' => 'id')),
      'id_vehiculo'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehiculo'), 'column' => 'id')),
      'id_sincodigo'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sin_Codigo'), 'column' => 'id')),
      'tiempo'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'detalle'           => new sfValidatorPass(array('required' => false)),
      'fecha'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora'              => new sfValidatorPass(array('required' => false)),
      'estado'            => new sfValidatorChoice(array('required' => false, 'choices' => array('cancelada' => 'cancelada', 'completada' => 'completada', 'espera' => 'espera', 'solicitada' => 'solicitada'))),
      'tiempo_atencion'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'destino'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sector'), 'column' => 'id')),
      'horaat'            => new sfValidatorPass(array('required' => false)),
      'tiempo_aprox_dest' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hora_dest'         => new sfValidatorPass(array('required' => false)),
      'calidad'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('carrera_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Carrera';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_operador'       => 'ForeignKey',
      'id_codigo'         => 'ForeignKey',
      'id_vehiculo'       => 'ForeignKey',
      'id_sincodigo'      => 'ForeignKey',
      'tiempo'            => 'Number',
      'detalle'           => 'Text',
      'fecha'             => 'Date',
      'hora'              => 'Text',
      'estado'            => 'Enum',
      'tiempo_atencion'   => 'Number',
      'destino'           => 'ForeignKey',
      'horaat'            => 'Text',
      'tiempo_aprox_dest' => 'Number',
      'hora_dest'         => 'Text',
      'calidad'           => 'Number',
    );
  }
}
