<?php

/**
 * Reservacion filter form base class.
 *
 * @package    radiotaxi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReservacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_codigo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => true)),
      'lunes'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'martes'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'miercoles' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'jueves'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'viernes'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sabado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'domingo'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'horario1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horario2'  => new sfWidgetFormFilterInput(),
      'horario3'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_codigo' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Codigo'), 'column' => 'id')),
      'lunes'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'martes'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'miercoles' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'jueves'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'viernes'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sabado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'domingo'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'horario1'  => new sfValidatorPass(array('required' => false)),
      'horario2'  => new sfValidatorPass(array('required' => false)),
      'horario3'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reservacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reservacion';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'id_codigo' => 'ForeignKey',
      'lunes'     => 'Boolean',
      'martes'    => 'Boolean',
      'miercoles' => 'Boolean',
      'jueves'    => 'Boolean',
      'viernes'   => 'Boolean',
      'sabado'    => 'Boolean',
      'domingo'   => 'Boolean',
      'horario1'  => 'Text',
      'horario2'  => 'Text',
      'horario3'  => 'Text',
    );
  }
}
