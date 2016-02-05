<?php

/**
 * Solicitud_Carrera form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Solicitud_CarreraForm extends BaseSolicitud_CarreraForm {

    public function codigos() {
        $codigos = Doctrine_Core::getTable('codigo')
                ->createQuery('c')->where('c.id_user=?', sfContext::getInstance()->getUser()->getGuardUser()->getId())
                ->execute();
        $cod = array();
        foreach ($codigos as $codigo) {
            $cod[$codigo->getId()] = $codigo;
        }
        return $cod;
    }

    public function configure() {


        unset(
                $this['estado'], $this['created_at'], $this['updated_at'], $this['fecha'], $this['hora'], $this['id_cliente'], $this['notificacion']
        );
                $this->widgetSchema['id_codigo'] = new sfWidgetFormChoice(array('choices' => $this->codigos(),
                    'multiple' => false, 'expanded' => true,
                ));
                        $this->validatorSchema['id_codigo'] = new sfValidatorChoice(array(
                    'choices' => array_keys($this->codigos()), 'required' => true
                ));
                        
                        $this->widgetSchema['tiempo'] = new sfWidgetFormChoice(array('choices' => CarreraForm::listMinutos(),
                ));

        $this->validatorSchema['tiempo'] = new sfValidatorChoice(array(
                    'choices' => array_keys(CarreraForm::listMinutos()), 'required' => true
                ));

        $this->widgetSchema->setLabels(array(
            'id_codigo' => 'Código: <b style="color: red;">*</b>',
            'tiempo' => 'Tiempo de espera: <b style="color: red;">*</b>',
            'detalle' => 'Detalle:'
        ));
    }

}
