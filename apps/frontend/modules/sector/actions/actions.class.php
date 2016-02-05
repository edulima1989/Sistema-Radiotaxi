<?php

/**
 * sector actions.
 *
 * @package    radiotaxi
 * @subpackage sector
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sectorActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->sectors = Doctrine_Core::getTable('sector')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->sector = Doctrine_Core::getTable('sector')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->sector);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new sectorForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new sectorForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($sector = Doctrine_Core::getTable('sector')->find(array($request->getParameter('id'))), sprintf('Object sector does not exist (%s).', $request->getParameter('id')));
        $this->form = new sectorForm($sector);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($sector = Doctrine_Core::getTable('sector')->find(array($request->getParameter('id'))), sprintf('Object sector does not exist (%s).', $request->getParameter('id')));
        $this->form = new sectorForm($sector);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($sector = Doctrine_Core::getTable('sector')->find(array($request->getParameter('id'))), sprintf('Object sector does not exist (%s).', $request->getParameter('id')));
        $sector->delete();

        $this->redirect('sector/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $sector = $form->save();
            $this->getUser()->setFlash('notice', 'Los datos del sector se guardaron correctamente', true);
            $this->redirect('sector/edit?id=' . $sector->getId());
        }
    }

}
