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

        $this->codigos = Doctrine_Core::getTable('codigo')
                ->createQuery('c')->where('c.id_user=?', $this->getUser()->getGuardUser()->getId())
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->codigo = Doctrine_Core::getTable('codigo')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->codigo);
    }

   
}
