<?php

/**
 * carreraPeticion actions.
 *
 * @package    radiotaxi
 * @subpackage carreraPeticion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class carreraPeticionActions extends sfActions {

    public function executeCargarNotificacionAprobada(sfWebRequest $request) {
        date_default_timezone_set("America/Guayaquil");
        $this->solicitud = Doctrine_Core::getTable('solicitud_carrera')
                ->createQuery('c')
                ->where('c.id_cliente=?', $this->getUser()->getGuardUser()->getId())
                ->andWhere('c.estado=?', 'aprobada')->andWhere('c.notificacion=?', '3')
                ->execute();
        $dataJson = array();
        foreach ($this->solicitud as $sol) {
            $dataJson[] = array('id' => $sol->getId(),
                'codigo' => $sol->getCodigo()->getNumero(),
                'tiempo' => $sol->getTiempo()
            );
        }
        return $this->renderText(json_encode($dataJson));
    }

     public function executeCargarNotificacionRechazada(sfWebRequest $request) {
        date_default_timezone_set("America/Guayaquil");
        $this->solicitud = Doctrine_Core::getTable('solicitud_carrera')
                ->createQuery('c')
                ->where('c.id_cliente=?', $this->getUser()->getGuardUser()->getId())
                ->andWhere('c.estado=?', 'rechazada')->andWhere('c.notificacion=?', '4')
                ->execute();
        $dataJson = array();
        foreach ($this->solicitud as $sol) {
            $dataJson[] = array('id' => $sol->getId(),
                'codigo' => $sol->getCodigo()->getNumero(),
                'tiempo' => $sol->getTiempo()
            );
        }
        return $this->renderText(json_encode($dataJson));
    }
    
    public function executeActualizarNotificacionSolicitud(sfWebRequest $request) {
        if ($request->isXmlHttpRequest()) {
            $id = $request->getParameter('id');
            $notificacion = $request->getParameter('notificacion');
            $solicitud_carrera = Doctrine_Core::getTable('solicitud_carrera')->find(array($id));
            $solicitud_carrera->setNotificacion($notificacion);
            $solicitud_carrera->save();
            $dataJson = array();
            return $this->renderText(json_encode($dataJson));
        }
    }
    public function executeIndex(sfWebRequest $request) {
        $this->solicitud_carreras = Doctrine_Core::getTable('Solicitud_Carrera')
                ->createQuery('a')
                ->where('a.id_cliente=?', $this->getUser()->getGuardUser()->getId())
                ->execute();
    }

    public function executeNotificacion(sfWebRequest $request) {
        
    }

    public function executeShow(sfWebRequest $request) {
        $this->solicitud_carrera = Doctrine_Core::getTable('Solicitud_Carrera')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->solicitud_carrera);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new Solicitud_CarreraForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        date_default_timezone_set("America/Guayaquil");

        $this->form = new Solicitud_CarreraForm();
        $this->form->getObject()->setFecha(date("Y-m-d"));
        $this->form->getObject()->setHora(date("H:i:s"));
        $this->form->getObject()->setEstado('Solicitada');
        $this->form->getObject()->setNotificacion('1');
        $this->form->getObject()->setSfGuardUser($this->getUser()->getGuardUser());
        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($solicitud_carrera = Doctrine_Core::getTable('Solicitud_Carrera')->find(array($request->getParameter('id'))), sprintf('Object solicitud_carrera does not exist (%s).', $request->getParameter('id')));
        $this->form = new Solicitud_CarreraForm($solicitud_carrera);
    }

    public function executeCancelar(sfWebRequest $request) {
        $this->forward404Unless($solicitud_carrera = Doctrine_Core::getTable('Solicitud_Carrera')->find(array($request->getParameter('id'))), sprintf('Object solicitud_carrera does not exist (%s).', $request->getParameter('id')));
        $solicitud_carrera->setEstado('cancelada');
        $solicitud_carrera->setNotificacion('2');
        $solicitud_carrera->save();
        $this->redirect('carreraPeticion/index');
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($solicitud_carrera = Doctrine_Core::getTable('Solicitud_Carrera')->find(array($request->getParameter('id'))), sprintf('Object solicitud_carrera does not exist (%s).', $request->getParameter('id')));
        $this->form = new Solicitud_CarreraForm($solicitud_carrera);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($solicitud_carrera = Doctrine_Core::getTable('Solicitud_Carrera')->find(array($request->getParameter('id'))), sprintf('Object solicitud_carrera does not exist (%s).', $request->getParameter('id')));
        $solicitud_carrera->delete();

        $this->redirect('carreraPeticion/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $solicitud_carrera = $form->save();

            $this->redirect('carreraPeticion/notificacion');
        }
    }

}
