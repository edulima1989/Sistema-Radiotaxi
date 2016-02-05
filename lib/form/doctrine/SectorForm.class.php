<?php

/**
 * Sector form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SectorForm extends BaseSectorForm {

    public function configure() {
        $this->widgetSchema->setLabels(array(
            'nombre' => 'Nombre: <b style="color: red;">*</b>',
            'latitud' => 'Latitud: <b style="color: red;">*</b>',
            'longitud' => 'Longitud: <b style="color: red;">*</b>'
        ));
    }

}
