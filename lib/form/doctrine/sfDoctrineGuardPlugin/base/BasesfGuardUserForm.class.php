<?php

/**
 * sfGuardUser form base class.
 *
 * @method sfGuardUser getObject() Returns the current form's model object
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserForm extends PersonaForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['username'] = new sfWidgetFormInputText();
    $this->validatorSchema['username'] = new sfValidatorString(array('max_length' => 128));

    $this->widgetSchema   ['algorithm'] = new sfWidgetFormInputText();
    $this->validatorSchema['algorithm'] = new sfValidatorString(array('max_length' => 128, 'required' => false));

    $this->widgetSchema   ['salt'] = new sfWidgetFormInputText();
    $this->validatorSchema['salt'] = new sfValidatorString(array('max_length' => 128, 'required' => false));

    $this->widgetSchema   ['password'] = new sfWidgetFormInputText();
    $this->validatorSchema['password'] = new sfValidatorString(array('max_length' => 128, 'required' => false));

    $this->widgetSchema   ['email_address'] = new sfWidgetFormInputText();
    $this->validatorSchema['email_address'] = new sfValidatorString(array('max_length' => 50));

    $this->widgetSchema   ['is_active'] = new sfWidgetFormInputCheckbox();
    $this->validatorSchema['is_active'] = new sfValidatorBoolean(array('required' => false));

    $this->widgetSchema   ['is_super_admin'] = new sfWidgetFormInputCheckbox();
    $this->validatorSchema['is_super_admin'] = new sfValidatorBoolean(array('required' => false));

    $this->widgetSchema   ['last_login'] = new sfWidgetFormDateTime();
    $this->validatorSchema['last_login'] = new sfValidatorDateTime(array('required' => false));

    $this->widgetSchema   ['created_at'] = new sfWidgetFormDateTime();
    $this->validatorSchema['created_at'] = new sfValidatorDateTime();

    $this->widgetSchema   ['updated_at'] = new sfWidgetFormDateTime();
    $this->validatorSchema['updated_at'] = new sfValidatorDateTime();

    $this->widgetSchema   ['groups_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup'));
    $this->validatorSchema['groups_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup', 'required' => false));

    $this->widgetSchema   ['permissions_list'] = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardPermission'));
    $this->validatorSchema['permissions_list'] = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardPermission', 'required' => false));

    $this->widgetSchema->setNameFormat('sf_guard_user[%s]');
  }

  public function getModelName()
  {
    return 'sfGuardUser';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['groups_list']))
    {
      $this->setDefault('groups_list', $this->object->Groups->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['permissions_list']))
    {
      $this->setDefault('permissions_list', $this->object->Permissions->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveGroupsList($con);
    $this->savePermissionsList($con);

    parent::doSave($con);
  }

  public function saveGroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['groups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Groups->getPrimaryKeys();
    $values = $this->getValue('groups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Groups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Groups', array_values($link));
    }
  }

  public function savePermissionsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['permissions_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Permissions->getPrimaryKeys();
    $values = $this->getValue('permissions_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Permissions', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Permissions', array_values($link));
    }
  }

}
