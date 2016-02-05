<?php

require_once dirname(__FILE__) . '/../lib/peticionGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/peticionGeneratorHelper.class.php';

/**
 * peticion actions.
 *
 * @package    radiotaxi
 * @subpackage peticion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class peticionActions extends autoPeticionActions {

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $peticion = $form->save();

            $newUser = new sfGuardUser();
            $newUser->setUsername($form->getObject()->getUsername());
            $newUser->setFirstName($form->getObject()->getFirstName());
            $newUser->setLastName($form->getObject()->getLastName());
            $newUser->setSexo($form->getObject()->getSexo());
            $newUser->setDireccion($form->getObject()->getDireccion());

            $newUser->setTelefono($form->getObject()->getTelefono());
            $newUser->setTelefonoMovil($form->getObject()->getTelefonoMovil());
            $newUser->setEmailAddress($form->getObject()->getEmailAddress());
            $newUser->setPassword($form->getObject()->getPassword());
            try {

                $newUser->save();
                $peticion->delete();
                $this->redirect('sfGuardUser/editagregar?id=' . $newUser->getId());
            } catch (Exception $e) {

                $this->redirect('peticion/edit?id=' . $peticion->getId());
            }
        }
    }

}
