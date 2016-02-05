<?php

/**
 * peticionCodigo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage peticionCodigo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePeticionCodigoGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  '_edit' =>   array(    'label' => 'Aprobar',  ),  '_delete' =>   array(    'label' => 'Rechazar',  ),);
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
    return '%%sfGuardUser%% - %%barrio%% - %%calle1%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Administración de Solicitudes de Código';
  }

  public function getEditTitle()
  {
    return 'Solicitud de Código';
  }

  public function getNewTitle()
  {
    return 'Nueva Solicitud';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'id_user',);
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
    return array(  0 => 'sfGuardUser',  1 => 'barrio',  2 => 'calle1',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_user' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'id_cliente' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'numero' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'barrio' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'calle1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'calle2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numCasa' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'observacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'latitud' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'longitud' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'id_user' => array(),
      'id_cliente' => array(),
      'numero' => array(),
      'barrio' => array(),
      'calle1' => array(  'label' => 'Teléfono',),
      'calle2' => array(),
      'numCasa' => array(),
      'observacion' => array(),
      'latitud' => array(),
      'longitud' => array(),
      'sfGuardUser' => array(  'label' => 'Solicitante',),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'id_user' => array(  'label' => 'Cliente:',),
      'id_cliente' => array(),
      'numero' => array(),
      'barrio' => array(),
      'calle1' => array(),
      'calle2' => array(),
      'numCasa' => array(),
      'observacion' => array(),
      'latitud' => array(),
      'longitud' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'id_user' => array(),
      'id_cliente' => array(),
      'numero' => array(),
      'barrio' => array(),
      'calle1' => array(),
      'calle2' => array(),
      'numCasa' => array(),
      'observacion' => array(),
      'latitud' => array(),
      'longitud' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'id_user' => array(),
      'id_cliente' => array(),
      'numero' => array(),
      'barrio' => array(),
      'calle1' => array(),
      'calle2' => array(),
      'numCasa' => array(),
      'observacion' => array(),
      'latitud' => array(),
      'longitud' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'id_user' => array(),
      'id_cliente' => array(),
      'numero' => array(),
      'barrio' => array(),
      'calle1' => array(),
      'calle2' => array(),
      'numCasa' => array(),
      'observacion' => array(),
      'latitud' => array(),
      'longitud' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'Peticion_CodigoForm';
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
    return 'Peticion_CodigoFormFilter';
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
