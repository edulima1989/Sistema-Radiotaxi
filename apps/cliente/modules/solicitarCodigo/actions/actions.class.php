<?php

/**
 * solicitarCodigo actions.
 *
 * @package    radiotaxi
 * @subpackage solicitarCodigo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class solicitarCodigoActions extends sfActions
{


  public function executeNew(sfWebRequest $request)
  {
    $this->form = new Peticion_CodigoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new Peticion_CodigoForm();
    $this->form->getObject()->setIdUser($this->getUser()->getGuardUser()->getId());
    $this->form->getObject()->setIdCliente(null);
    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $peticion_codigo = $form->save();
      $peticion_codigo->setNumero($peticion_codigo->getId());
      $peticion_codigo->save();
      $this->redirect('solicitarCodigo/notificacion');
    }
  }
  
    public function executeNotificacion(){
      
  }
}
