<?php


class AbstractModel
{

    protected static $table;
    private $data=[];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

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

    public static function selectByColumn($column,$value)
    {
        $class = get_called_class();
        $sql = ' SELECT * FROM ' . static::$table . ' WHERE ' . $column . ' = :value';
        $db = new DB();
        $db->setClass($class);
        return $db->getALL($sql,[':value'=>$value]);
    }

    public function deleteByPk()
    {

        $sql = ' DELETE FROM ' . static::$table . ' WHERE id = :id ';
        $db = new DB();
        $db->excute($sql,[':id' =>$this->data['id']]);

    }

}