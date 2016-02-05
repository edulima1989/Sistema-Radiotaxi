<?php

/**
 * peticion actions.
 *
 * @package    radiotaxi
 * @subpackage peticion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class peticionActions extends sfActions {

    public function executeNew(sfWebRequest $request) {
        $this->form = new peticionForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new peticionForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {

        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

        if ($form->isValid()) {
            try {
                $peticion = $form->save();
                $aux = Doctrine_Query::create()
                        ->from('sfGuardUser s')
                        ->where('s.email_address = ?', $peticion->getEmailAddress());
                $aux1 = $aux->fetchOne();
                if (!$aux1) {
                    $auxU = Doctrine_Query::create()
                            ->from('sfGuardUser s')
                            ->where('s.username = ?', $peticion->getUsername());
                    $auxU1 = $auxU->fetchOne();
                    if (!$auxU1) {
                        $this->redirect('peticion/notificacion');
                    } else {
                        $peticion->delete();
                        $this->getUser()->setFlash('error', 'El nombre de usuario "' . $peticion->getUsername() . '" no esta disponible. Por favor intente con un nombre de usuario diferente', false);
                    }
                } else {
                    $peticion->delete();
                    $this->getUser()->setFlash('error', 'El correo electrónico "' . $peticion->getEmailAddress() . '" ya se encuentra registrado en nuestro sistema. Por favor intente con un correo electrónico diferente', false);
                }
            } catch (Exception $e) {
                $this->getUser()->setFlash('error', 'El correo electrónico ingresado ya se encuentra registrado en nuestro sistema. Por favor intente con un correo electrónico diferente', false);
            }
        }
    }

    public function executeNotificacion() {
        
    }

}
