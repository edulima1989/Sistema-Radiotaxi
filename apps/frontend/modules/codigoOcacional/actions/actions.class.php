<?php

/**
 * codigoOcacional actions.
 *
 * @package    radiotaxi
 * @subpackage codigoOcacional
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class codigoOcacionalActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sin_codigos = Doctrine_Core::getTable('sin_codigo')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sin_codigo = Doctrine_Core::getTable('sin_codigo')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sin_codigo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sin_codigoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sin_codigoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sin_codigo = Doctrine_Core::getTable('sin_codigo')->find(array($request->getParameter('id'))), sprintf('Object sin_codigo does not exist (%s).', $request->getParameter('id')));
    $this->form = new sin_codigoForm($sin_codigo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sin_codigo = Doctrine_Core::getTable('sin_codigo')->find(array($request->getParameter('id'))), sprintf('Object sin_codigo does not exist (%s).', $request->getParameter('id')));
    $this->form = new sin_codigoForm($sin_codigo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sin_codigo = Doctrine_Core::getTable('sin_codigo')->find(array($request->getParameter('id'))), sprintf('Object sin_codigo does not exist (%s).', $request->getParameter('id')));
    $sin_codigo->delete();

    $this->redirect('codigoOcacional/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sin_codigo = $form->save();

      $this->redirect('codigoOcacional/edit?id='.$sin_codigo->getId());
    }
  }
}
