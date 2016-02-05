<?php

/**
 * peticionCodigo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage peticionCodigo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePeticionCodigoGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'peticion_codigo' : 'peticion_codigo_'.$action;
  }
}
