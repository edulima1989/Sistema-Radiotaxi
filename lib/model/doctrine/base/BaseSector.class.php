<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Sector', 'doctrine');

/**
 * BaseSector
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $latitud
 * @property string $longitud
 * @property Doctrine_Collection $Vehiculo
 * @property Doctrine_Collection $Codigo
 * @property Doctrine_Collection $Carrera
 * @property Doctrine_Collection $Sin_Codigo
 * 
 * @method string              getNombre()     Returns the current record's "nombre" value
 * @method string              getLatitud()    Returns the current record's "latitud" value
 * @method string              getLongitud()   Returns the current record's "longitud" value
 * @method Doctrine_Collection getVehiculo()   Returns the current record's "Vehiculo" collection
 * @method Doctrine_Collection getCodigo()     Returns the current record's "Codigo" collection
 * @method Doctrine_Collection getCarrera()    Returns the current record's "Carrera" collection
 * @method Doctrine_Collection getSinCodigo()  Returns the current record's "Sin_Codigo" collection
 * @method Sector              setNombre()     Sets the current record's "nombre" value
 * @method Sector              setLatitud()    Sets the current record's "latitud" value
 * @method Sector              setLongitud()   Sets the current record's "longitud" value
 * @method Sector              setVehiculo()   Sets the current record's "Vehiculo" collection
 * @method Sector              setCodigo()     Sets the current record's "Codigo" collection
 * @method Sector              setCarrera()    Sets the current record's "Carrera" collection
 * @method Sector              setSinCodigo()  Sets the current record's "Sin_Codigo" collection
 * 
 * @package    radiotaxi
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSector extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sector');
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('latitud', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('longitud', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Vehiculo', array(
             'local' => 'id',
             'foreign' => 'id_sector'));

        $this->hasMany('Codigo', array(
             'local' => 'id',
             'foreign' => 'barrio'));

        $this->hasMany('Carrera', array(
             'local' => 'id',
             'foreign' => 'destino'));

        $this->hasMany('Sin_Codigo', array(
             'local' => 'id',
             'foreign' => 'barrio'));
    }
}