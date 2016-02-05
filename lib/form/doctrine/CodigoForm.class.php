    <?php

/**
 * Codigo form.
 *
 * @package    radiotaxi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CodigoForm extends BaseCodigoForm {

    public function configure() {
        unset(
                $this['id_cliente'], $this['id_user']
        );
        $this->validatorSchema['numero'] = new sfValidatorAnd(array(
                    $this->validatorSchema['numero'],
                    new sfValidatorNumber(),
                ));
        $this->widgetSchema['barrio'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => 'Barrios...'));
        $this->widgetSchema->setLabels(array(
            'numero' => 'Número: <b style="color: red;">*</b>',
            'calle1' => 'Calle principal: <b style="color: red;">*</b>',
            'calle2' => 'Calle secundaria: ',
            'numCasa' => 'Número de casa: ',
            'observacion' => 'Referencias: <b style="color: red;">*</b>',
            'barrio' => 'Barrio: <b style="color: red;">*</b>',
            'latitud' => 'Latitud: <b style="color: red;">*</b>',
            'longitud' => 'Longitud: <b style="color: red;">*</b>'
        ));
    }

}
