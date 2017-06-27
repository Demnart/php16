<?php


class AbstractModel
{

    protected static $table;

    public static function findALL()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClass($class);
        return $db->getALL($sql);
    }

    public static function findOneByPK($id)
    {
        $class = get_called_class();
        $sql = ' SELECT * FROM ' . static::$table . ' WHERE id = :id ';
        $db = new DB();
        $db->setClass($class);
        return $db->getALL($sql,[':id'=>$id])[0];
    }
}