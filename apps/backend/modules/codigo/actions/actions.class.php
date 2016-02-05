<?php

require_once dirname(__FILE__) . '/../lib/codigoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/codigoGeneratorHelper.class.php';

/**
 * codigo actions.
 *
 * @package    radiotaxi
 * @subpackage codigo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class codigoActions extends autoCodigoActions {

    public function executeCargarSectores(sfWebRequest $request) {
        $this->sectores = Doctrine_Core::getTable('sector')
                ->createQuery('c')
                ->execute();
        $dataJson = array();
        foreach ($this->sectores as $sector) {
            $dataJson[$sector->getId()] = array('id' => $sector->getId(),
                'nombre' => $sector->getNombre(),
                'lat' => $sector->getLatitud(),
                'lng' => $sector->getLongitud()
            );
        }
        return $this->renderText(json_encode($dataJson));
    }

    public function executeEdit(sfWebRequest $request) {
        $this->codigo = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->codigo);
        $this->carreras = Doctrine_Core::getTable('carrera')
                ->createQuery('a')->where('a.id_codigo=?', $this->codigo->getId())
                ->limit(2)
                ->execute();
        $this->solicitudes = Doctrine_Core::getTable('solicitud_carrera')
                ->createQuery('a')->where('a.id_codigo=?', $this->codigo->getId())
                ->limit(2)
                ->execute();
    }

    public function executeEditagregar(sfWebRequest $request) {
        $this->codigo = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->codigo);
        $aux = 1;
        $this->getUser()->setAttribute('usercrear', $aux);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->codigo = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->codigo);

        $nu = $this->getUser()->getAttribute('usercrear');
        if ($nu == 1) {
            $a = 0;
            $this->getUser()->setAttribute('usercrear', $a);
            $this->processForm($request, $this->form);
        } else {
            $this->processFormedit($request, $this->form);
        }
        $this->setTemplate('edit');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {

            try {
                $codigo = $form->save();
                try {
                    if (is_null($codigo->getIdCliente())) {

                        $sms = "\n 
                         COOPERATIVA DE TAXIS \"BENJAMÍN CARRIÓN\"\n\n
                        Sistema de RADIO-TAXI en linea \n
                        Le recordamos que su cuenta le permite acceder a muchas funciones 
                        importantes en nuestro sitio web, incluyendo:\n\n
                        -Solicitar el servicio de radio-taxi.
                        -Crear códigos para la utilizacion del servicio de radio-taxi.\n\n
                        Por favor, guarde este mensaje para futuras referencias.\n\n
                        
                        La petición de código ha sido aceptada favorablemente:\n
                        Su nuevo código es: " . $codigo->getNumero() . " 
                        Y se encuentra registrado para los siguientes datos:
                        Cliente: " . $codigo->getSfGuardUser()->getFirstName() . " " . $codigo->getSfGuardUser()->getLastName() . "
                        Barrio: " . $codigo->obtenerBarrio() . "
                        Calle principal: " . $codigo->getCalle1() . "
                        Calle secundaria: " . $codigo->getCalle2() . "
                        Número de casa: " . $codigo->getNumCasa() . "
                        Referencias: " . $codigo->getObservacion() . "
                            
                        Desde este momento usted puede hacer el uso de su código
                        solicitando el sevicio de radio-taxi via web ingresando 
                        a su cuenta.
                        " . sfConfig::get('app_url_pagina') . " \n\n\n\n
                        ";

                        $message = Swift_Message::newInstance('Notificación')
                                ->setFrom(array(sfConfig::get('app_correo_admin') => sfConfig::get('app_nombre_admin')))
                                ->setTo(array($codigo->getSfGuardUser()->getEmailAddress() => 'user'))
                                ->setBody($sms)
                        ;

                        if ($this->getMailer()->send($message)) {
                            $this->getUser()->setFlash('notice', 'EL correo se envio correctamente.');
                        } else {
                            $this->getUser()->setFlash('error', 'Error en el envio de correo.', false);
                        }
                    }
                    $this->getUser()->setFlash('notice', 'Datos agregados exitosamente');
                } catch (Exception $e) {
                    
                }
            } catch (Doctrine_Validator_Exception $e) {

                $errorStack = $form->getObject()->getErrorStack();

                $message = get_class($form->getObject()) . ' Tiene ' . count($errorStack) . " campo" . (count($errorStack) > 1 ? 's' : null) . " con errores de validación: ";
                foreach ($errorStack as $field => $errors) {
                    $message .= "$field (" . implode(", ", $errors) . "), ";
                }
                $message = trim($message, ', ');

                $this->getUser()->setFlash('error', $message);
                return sfView::SUCCESS;
            }

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice', $notice . ' Usted puede agregar otro más adelante.');

                $this->redirect('@codigo_new');
            } else {
                
            }
        } else {
            $this->getUser()->setFlash('error', 'Los datos no se han guardado debido a algunos errores.', false);
        }
    }

    protected function processFormedit(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {

            try {
                $codigo = $form->save();
                try {
                    if (is_null($codigo->getIdCliente())) {

                        $sms = "\n 
                        COOPERATIVA DE TAXIS \"BENJAMÍN CARRIÓN\"\n\n
                        Sistema de RADIO-TAXI en linea \n
                        Le recordamos que su cuenta le permite acceder a muchas funciones 
                        importantes en nuestro sitio web, incluyendo:\n\n
                        -Solicitar el servicio de radio-taxi.
                        -Crear códigos para la utilizacion del servicio de radio-taxi.\n\n
                        Por favor, guarde este mensaje para futuras referencias.\n\n
                        

                        El cambio de los datos de código ha sido registrados favorablemente:\n
                        Su nuevo código es: " . $codigo->getNumero() . " 
                        Y se encuentra registrado para los siguientes datos:
                        Cliente: " . $codigo->getSfGuardUser()->getFirstName() . " " . $codigo->getSfGuardUser()->getLastName() . "
                        Barrio: " . $codigo->obtenerBarrio() . "
                        Calle principal: " . $codigo->getCalle1() . "
                        Calle secundaria: " . $codigo->getCalle2() . "
                        Número de casa: " . $codigo->getNumCasa() . "
                        Referencias: " . $codigo->getObservacion() . "
                            
                        Desde este momento usted puede hacer el uso de su código
                        solicitando el sevicio de radio-taxi via web ingresando 
                        a su cuenta.
                        " . sfConfig::get('app_url_pagina') . " \n\n\n\n
                        ";

                        $message = Swift_Message::newInstance('Notificación')
                                ->setFrom(array(sfConfig::get('app_correo_admin') => sfConfig::get('app_nombre_admin')))
                                ->setTo(array($codigo->getSfGuardUser()->getEmailAddress() => 'user'))
                                ->setBody($sms)
                        ;

                        if ($this->getMailer()->send($message)) {
                            $this->getUser()->setFlash('notice', 'EL correo se envio correctamente.');
                        } else {
                            $this->getUser()->setFlash('error', 'Error en el envio de correo.', false);
                        }
                    }
                    $this->getUser()->setFlash('notice', 'Datos agregados exitosamente');
                } catch (Exception $e) {
                    
                }
            } catch (Doctrine_Validator_Exception $e) {

                $errorStack = $form->getObject()->getErrorStack();

                $message = get_class($form->getObject()) . ' tiene ' . count($errorStack) . " campo" . (count($errorStack) > 1 ? 's' : null) . " con errores de validación: ";
                foreach ($errorStack as $field => $errors) {
                    $message .= "$field (" . implode(", ", $errors) . "), ";
                }
                $message = trim($message, ', ');

                $this->getUser()->setFlash('error', $message);
                return sfView::SUCCESS;
            }

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice', $notice . ' You can add another one below.');

                $this->redirect('@codigo_new');
            } else {
                
            }
        } else {
            $this->getUser()->setFlash('error', 'Los datos no se han guardado debido a algunos errores.', false);
        }
    }

}
