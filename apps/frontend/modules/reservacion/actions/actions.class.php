<?php

/**
 * reservacion actions.
 *
 * @package    radiotaxi
 * @subpackage reservacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reservacionActions extends sfActions {

    public function executeCargarCodigo(sfWebRequest $request) {
         if ($request->isXmlHttpRequest()) {
            $dataJson = array();
            $codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('codigo')));

            $dataJson[] = array('id' => $codigo->getId(),
                'cliente' => $codigo->getNombreCliente(),
                'barrio' => $codigo->getSector()->getNombre(),
                'calle1' => $codigo->getCalle1(),
                'calle2' => $codigo->getCalle2(),
                'numcasa' => $codigo->getNumCasa(),
                'referencia' => $codigo->getObservacion()
            );
            return $this->renderText(json_encode($dataJson));
        }
    }

    public function executeIndex(sfWebRequest $request) {
        $this->reservacions = Doctrine_Core::getTable('reservacion')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->reservacion = Doctrine_Core::getTable('reservacion')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->reservacion);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new reservacionForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new reservacionForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($reservacion = Doctrine_Core::getTable('reservacion')->find(array($request->getParameter('id'))), sprintf('Object reservacion does not exist (%s).', $request->getParameter('id')));
        $this->form = new reservacionForm($reservacion);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($reservacion = Doctrine_Core::getTable('reservacion')->find(array($request->getParameter('id'))), sprintf('Object reservacion does not exist (%s).', $request->getParameter('id')));
        $this->form = new reservacionForm($reservacion);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($reservacion = Doctrine_Core::getTable('reservacion')->find(array($request->getParameter('id'))), sprintf('Object reservacion does not exist (%s).', $request->getParameter('id')));
        $reservacion->delete();

        $this->redirect('reservacion/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $reservacion = $form->save();

            $this->redirect('reservacion/edit?id=' . $reservacion->getId());
        }
    }

}
