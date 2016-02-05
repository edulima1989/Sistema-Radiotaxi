<?php

/**
 * carrera actions.
 *
 * @package    radiotaxi
 * @subpackage carrera
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class carreraActions extends sfActions {

    public function executeEvaluacionCalidad(sfWebRequest $request) {
        $codigos = Doctrine_Core::getTable('codigo')
                ->createQuery('c')->where('c.id_user=?', $this->getUser()->getGuardUser()->getId())
                ->execute();
        $this->carreras = array();
        foreach ($codigos as $codigo) {
            $aux = Doctrine_Core::getTable('carrera')
                    ->createQuery('a')->where('a.id_codigo=?', $codigo->getId())
                    ->andWhere('a.calidad=?', -1)
                    ->execute();
            foreach ($aux as $aux2) {
                $this->carreras[] = $aux2;
            }
        }
    }

    public function executeEvaluar(sfWebRequest $request) {
        $this->carrera = Doctrine_Core::getTable('carrera')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->carrera);
    }

    public function executeEvaluacionEnviar(sfWebRequest $request) {
        $carrera = Doctrine_Core::getTable('carrera')->find(array($request->getParameter('id')));
        $carrera->setCalidad($request->getParameter('evalua_calidad'));
        $carrera->save();
        $this->getUser()->setFlash('notice', 'Gracias por ayudarnos a mejorar nuestros servicios.', true);
        $this->redirect('carrera/evaluacionCalidad');

    }

}
