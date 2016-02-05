<?php

/**
 * usuario actions.
 *
 * @package    radiotaxi
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->sf_guard_users = Doctrine_Core::getTable('sfGuardUser')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->sf_guard_user);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new sfGuardUserClienteForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new sfGuardUserClienteForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
        $this->form = new sfGuardUserClienteForm($sf_guard_user);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
        $this->form = new sfGuardUserClienteForm($sf_guard_user);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeContrasena(sfWebRequest $request) {
        $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
        $this->form = new sfGuardUserClienteForm($sf_guard_user);
    }

    public function executeUpdatecontrasena(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
        $this->form = new sfGuardUserClienteForm($sf_guard_user);
        $pass1 = $request->getParameter('password1');
        $pass2 = $request->getParameter('password2');
        if ($pass1 == $pass2) {
            if (strlen($pass1) >= 5) {
                $this->form->getObject()->setPassword($pass1);
                $this->getUser()->setFlash('notice', 'Los datos de contraseña se actualizaron correctamente.', true);
                $this->form->getObject()->save();
                $this->redirect('usuario/show?id=' . $sf_guard_user->getId());
            } else {
                $this->getUser()->setFlash('error', 'La contraseña ingresada es demaciado corta.', true);
            }
        } else {
            $this->getUser()->setFlash('error', 'La confirmación de contraseña no coincide.', true);
        }

        $this->setTemplate('contrasena');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
        $sf_guard_user->delete();

        $this->redirect('usuario/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $sf_guard_user = $form->save();

            $this->redirect('usuario/show?id=' . $sf_guard_user->getId());
        }
    }

}
