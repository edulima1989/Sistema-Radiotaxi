<?php

/**
 * ClienteTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ClienteTable extends personaTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ClienteTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Cliente');
    }
}