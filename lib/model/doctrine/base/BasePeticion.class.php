<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Peticion', 'doctrine');

/**
 * BasePeticion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * 
 * @package    radiotaxi
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePeticion extends sfGuardUser
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('peticion');
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}