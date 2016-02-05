<?php

/**
 * vehiculo actions.
 *
 * @package    radiotaxi
 * @subpackage vehiculo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehiculoActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->vehiculos = Doctrine_Core::getTable('vehiculo')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->vehiculo = Doctrine_Core::getTable('vehiculo')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->vehiculo);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new vehiculoForm();
        $this->form->getObject()->setIdPropietario($request->getParameter('id'));
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new vehiculoForm();

        $this->forward404Unless($propietario = Doctrine_Core::getTable('propietario')->find(array($request->getParameter('id_Propietario'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id_Propietario')));

        $this->form->getObject()->setPropietario($propietario);

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($vehiculo = Doctrine_Core::getTable('vehiculo')->find(array($request->getParameter('id'))), sprintf('Object vehiculo does not exist (%s).', $request->getParameter('id')));
        $this->form = new vehiculoForm($vehiculo);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($vehiculo = Doctrine_Core::getTable('vehiculo')->find(array($request->getParameter('id'))), sprintf('Object vehiculo does not exist (%s).', $request->getParameter('id')));
        $this->form = new vehiculoForm($vehiculo);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($vehiculo = Doctrine_Core::getTable('vehiculo')->find(array($request->getParameter('id'))), sprintf('Object vehiculo does not exist (%s).', $request->getParameter('id')));
        $vehiculo->delete();

        $this->redirect('vehiculo/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $vehiculo = $form->save();

//            $this->redirect('vehiculo/edit?id=' . $vehiculo->getId());
            $this->redirect('propietario/show?id=' . $vehiculo->getIdPropietario());
            
        }
    }

}
