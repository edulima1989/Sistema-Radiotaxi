<?php

/**
 * Reservacion form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReservacionForm extends BaseReservacionForm {

    public function configure() {
        $this->widgetSchema['id_codigo'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Codigo'), 'add_empty' => 'Seleccione un código...'));
        $this->widgetSchema->setLabels(array(
            'id_codigo' => 'Código: <b style="color: red;">*</b>',
            'lunes' => 'Lunes: ',
            'martes' => 'Martes: ',
            'miercoles' => 'Miercoles: ',
            'jueves' => 'Jueves: ',
            'viernes' => 'Viernes: ',
            'sabado' => 'Sabado: ',
            'domingo' => 'Domingo: ',
            'horario1' => 'Horario 1: <b style="color: red;">*</b>',
            'horario2' => 'Horario 2:',
            'horario3' => 'Horario 3:'
        ));
    }

}
