<?php

/**
 * propietario actions.
 *
 * @package    radiotaxi
 * @subpackage propietario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class propietarioActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->propietarios = Doctrine_Core::getTable('propietario')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->propietario = Doctrine_Core::getTable('propietario')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->propietario);

        $this->vehiculos = Doctrine_Core::getTable('vehiculo')
                ->createQuery('v')->where('v.id_Propietario=?',$request->getParameter('id'))
                ->execute();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new propietarioForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new propietarioForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($propietario = Doctrine_Core::getTable('propietario')->find(array($request->getParameter('id'))), sprintf('Object propietario does not exist (%s).', $request->getParameter('id')));
        $this->form = new propietarioForm($propietario);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($propietario = Doctrine_Core::getTable('propietario')->find(array($request->getParameter('id'))), sprintf('Object propietario does not exist (%s).', $request->getParameter('id')));
        $this->form = new propietarioForm($propietario);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($propietario = Doctrine_Core::getTable('propietario')->find(array($request->getParameter('id'))), sprintf('Object propietario does not exist (%s).', $request->getParameter('id')));
        $propietario->delete();

        $this->redirect('propietario/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $propietario = $form->save();
            $this->redirect('propietario/show?id=' . $propietario->getId());
        }
    }

}
