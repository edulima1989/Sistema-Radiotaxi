<?php

/**
 * cliente actions.
 *
 * @package    radiotaxi
 * @subpackage cliente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clienteActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $radio = $request->getParameter('group1');
        $this->apellido = $request->getParameter('apellido');
        $this->telefono = $request->getParameter('telefono');
        if ($radio == 'apellido') {
            $this->telefono = '';
            $this->checkedR1 = 'checked';
            $this->checkedR2 = '';
            if (strlen($this->apellido) == 0) {
                $this->clientes = Doctrine_Core::getTable('cliente')
                        ->createQuery('a')
                        ->limit(20)
                        ->execute();
            } else {
                $this->clientes = Doctrine_Core::getTable('cliente')
                        ->createQuery('a')->where('a.last_name LIKE ?', '%' . $this->apellido . '%')
                        ->limit(20)
                        ->execute();
            }
        } else if ($radio == 'telefono') {
            $this->apellido = '';
            $this->checkedR2 = 'checked';
            $this->checkedR1 = '';
            if (strlen($this->telefono) == 0) {
                $this->clientes = Doctrine_Core::getTable('cliente')
                        ->createQuery('a')
                        ->limit(20)
                        ->execute();
            } else {
                $this->clientes = Doctrine_Core::getTable('cliente')
                        ->createQuery('a')->where('a.telefono LIKE ?', '%' . $this->telefono . '%')
                        ->orWhere('a.telefonoMovil LIKE ?', '%' . $this->telefono . '%')
                        ->limit(20)
                        ->execute();
            }
        } else {
            $this->checkedR1 = 'checked';
            $this->checkedR2 = '';
            $this->clientes = Doctrine_Core::getTable('cliente')
                    ->createQuery('a')
                    ->limit(20)
                    ->execute();
        }        
    }

    public function executeShow(sfWebRequest $request) {
        $this->cliente = Doctrine_Core::getTable('cliente')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->cliente);

        $this->codigos = Doctrine_Core::getTable('codigo')
                ->createQuery('c')->where('c.id_cliente=?', $request->getParameter('id'))
                ->execute();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new clienteForm();
        
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new clienteForm();

        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($cliente = Doctrine_Core::getTable('cliente')->find(array($request->getParameter('id'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id')));
       
        $this->form = new clienteForm($cliente);
        $this->codigos = Doctrine_Core::getTable('codigo')
                ->createQuery('c')->where('c.id_cliente=?', $request->getParameter('id'))
                ->execute();
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($cliente = Doctrine_Core::getTable('cliente')->find(array($request->getParameter('id'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id')));
        $this->form = new clienteForm($cliente);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($cliente = Doctrine_Core::getTable('cliente')->find(array($request->getParameter('id'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id')));
        $cliente->delete();

        $this->redirect('cliente/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $cliente = $form->save();
            $this->redirect('cliente/show?id=' . $cliente->getId());
        }
    }

}
