<?php

/**
 * codigo actions.
 *
 * @package    radiotaxi
 * @subpackage codigo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class codigoActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->cod = $request->getParameter('cod');
        if (strlen($this->cod) == 0) {
            $this->codigos = Doctrine_Core::getTable('codigo')
                    ->createQuery('a')
                    ->limit(15)
                    ->execute();
        } else {
            $this->codigos = Doctrine_Core::getTable('codigo')
                    ->createQuery('a')->where('a.numero LIKE ?', '' . $this->cod . '%')
                    ->limit(15)
                    ->execute();
        }
    }

    public function executeShow(sfWebRequest $request) {
        $this->codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->codigo);
        $this->carreras = Doctrine_Core::getTable('carrera')
                ->createQuery('a')->where('a.id_codigo=?', $request->getParameter('id'))
                ->limit(2)
                ->execute();
        $this->reservaciones = Doctrine_Core::getTable('reservacion')
                ->createQuery('a')->where('a.id_codigo=?', $request->getParameter('id'))
                ->limit(2)
                ->execute();
    }

    public function executeDatos(sfWebRequest $request) {
        $this->codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->codigo);
    }

    public function executeNew(sfWebRequest $request) {

        $this->form = new codigoForm();
        $this->form->getObject()->setIdCliente($request->getParameter('id'));
    }

    public function executeCreate(sfWebRequest $request) {

        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new codigoForm();

        $this->forward404Unless($cliente = Doctrine_Core::getTable('cliente')->find(array($request->getParameter('id_Cliente'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id_Cliente')));

        $this->form->getObject()->setCliente($cliente);

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('id'))), sprintf('Object codigo does not exist (%s).', $request->getParameter('id')));
        $this->form = new codigoForm($codigo);
        $this->carreras = Doctrine_Core::getTable('carrera')
                ->createQuery('a')->where('a.id_codigo=?', $request->getParameter('id'))
                ->limit(2)
                ->execute();
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('id'))), sprintf('Object codigo does not exist (%s).', $request->getParameter('id')));
        $this->form = new codigoForm($codigo);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('id'))), sprintf('Object codigo does not exist (%s).', $request->getParameter('id')));
        $codigo->delete();
        $this->redirect($codigo->getUrlEliminar());
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $codigo = $form->save();
            $this->redirect($codigo->getUrlGuardar());
        }
    }

}
