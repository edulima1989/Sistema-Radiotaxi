<?php

require_once dirname(__FILE__) . '/../lib/peticionCodigoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/peticionCodigoGeneratorHelper.class.php';

/**
 * peticionCodigo actions.
 *
 * @package    radiotaxi
 * @subpackage peticionCodigo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class peticionCodigoActions extends autoPeticionCodigoActions {

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

        if ($this->getRoute()->getObject()->delete()) {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }

        $this->redirect('@peticion_codigo');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $peticion = $form->save();

            $newCodigo = new Codigo();
            $newCodigo-> setIdUser($form->getObject()->getIdUser());
            $newCodigo->setNumero($form->getObject()->getNumero()*-1);
            $newCodigo->setBarrio($form->getObject()->getBarrio());
            $newCodigo->setCalle1($form->getObject()->getCalle1());
            $newCodigo->setCalle2($form->getObject()->getCalle2());
            $newCodigo->setNumCasa($form->getObject()->getNumCasa());
            $newCodigo->setObservacion($form->getObject()->getObservacion());

            try {
                $newCodigo->save();
                $peticion->delete();
                $this->redirect('codigo/editagregar?id=' . $newCodigo->getId());
            } catch (Exception $e) {
                $this->redirect('peticionCodigo/edit?id=' . $peticion->getId());
            }
        }
    }

    protected function getFilters() {
        return $this->getUser()->getAttribute('peticionCodigo.filters', $this->configuration->getFilterDefaults(), 'admin_module');
    }

    protected function setFilters(array $filters) {
        return $this->getUser()->setAttribute('peticionCodigo.filters', $filters, 'admin_module');
    }

    protected function getPager() {
        $pager = $this->configuration->getPager('Peticion_Codigo');
        $pager->setQuery($this->buildQuery());
        $pager->setPage($this->getPage());
        $pager->init();

        return $pager;
    }

    protected function setPage($page) {
        $this->getUser()->setAttribute('peticionCodigo.page', $page, 'admin_module');
    }

    protected function getPage() {
        return $this->getUser()->getAttribute('peticionCodigo.page', 1, 'admin_module');
    }

    protected function buildQuery() {
        $tableMethod = $this->configuration->getTableMethod();
        if (null === $this->filters) {
            $this->filters = $this->configuration->getFilterForm($this->getFilters());
        }

        $this->filters->setTableMethod($tableMethod);

        $query = $this->filters->buildQuery($this->getFilters());

        $this->addSortQuery($query);

        $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
        $query = $event->getReturnValue();

        return $query;
    }

    protected function addSortQuery($query) {
        if (array(null, null) == ($sort = $this->getSort())) {
            return;
        }

        if (!in_array(strtolower($sort[1]), array('asc', 'desc'))) {
            $sort[1] = 'asc';
        }

        $query->addOrderBy($sort[0] . ' ' . $sort[1]);
    }

    protected function getSort() {
        if (null !== $sort = $this->getUser()->getAttribute('peticionCodigo.sort', null, 'admin_module')) {
            return $sort;
        }

        $this->setSort($this->configuration->getDefaultSort());

        return $this->getUser()->getAttribute('peticionCodigo.sort', null, 'admin_module');
    }

    protected function setSort(array $sort) {
        if (null !== $sort[0] && null === $sort[1]) {
            $sort[1] = 'asc';
        }

        $this->getUser()->setAttribute('peticionCodigo.sort', $sort, 'admin_module');
    }

    protected function isValidSortColumn($column) {
        return Doctrine_Core::getTable('Peticion_Codigo')->hasColumn($column);
    }

}

