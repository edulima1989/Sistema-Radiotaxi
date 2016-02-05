<?php

/**
 * Vehiculo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage Vehiculo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVehiculoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' =>   array(    'label' => 'Editar',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%=numero%% - %%propietario%% - %%placa%% - %%ano%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Administración de Unidades';
  }

  public function getEditTitle()
  {
    return 'Editar Unidad "%%numero%%"';
  }

  public function getNewTitle()
  {
    return 'Crear Unidad';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'id_propietario',  1 => 'numero',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '=numero',  1 => 'propietario',  2 => 'placa',  3 => 'ano',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_propietario' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'id_sector' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'numero' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'placa' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'marca' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'modelo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ano' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'id_propietario' => array(),
      'id_sector' => array(),
      'numero' => array(  'label' => 'Número',),
      'placa' => array(),
      'marca' => array(),
      'modelo' => array(),
      'ano' => array(  'label' => 'Año',),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'id_propietario' => array(  'label' => 'Propietario:',),
      'id_sector' => array(),
      'numero' => array(  'label' => 'Número:',),
      'placa' => array(),
      'marca' => array(),
      'modelo' => array(),
      'ano' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'id_propietario' => array(),
      'id_sector' => array(),
      'numero' => array(),
      'placa' => array(),
      'marca' => array(),
      'modelo' => array(),
      'ano' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'id_propietario' => array(),
      'id_sector' => array(),
      'numero' => array(),
      'placa' => array(),
      'marca' => array(),
      'modelo' => array(),
      'ano' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'id_propietario' => array(),
      'id_sector' => array(),
      'numero' => array(),
      'placa' => array(),
      'marca' => array(),
      'modelo' => array(),
      'ano' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'VehiculoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'VehiculoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
