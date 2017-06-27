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

    public function insert()
    {
        $cols = array_keys($this->data);
        foreach ($cols as $value)
        {
            $data[':' . $value] = $this->data[$value];
        }

           $sql = 'INSERT INTO '. static::$table .
            ' ('. implode(',',$cols).') 
            VALUES 
            ('. implode(',',array_keys($data)).') ';

        $db = new DB();
        $db->excute($sql,$data);
    }

    public function deleteByPk()
    {

        $sql = ' DELETE FROM ' . static::$table . ' WHERE id = :id ';
        $db = new DB();
        $db->excute($sql,[':id' =>$this->data['id']]);

    }

    public function update()
    {
        $sql ='UPDATE ' . static::$table . ' SET title =:title, text = :text , author=:author WHERE id =:id ';
        $db =new DB();
        $db->excute($sql,[':id'=>$this->data['id'],
                          ':title'=>$this->data['title'],
                          ':text'=>$this->data['text'],
                          ':author'=>$this->data['author']]);
    }

}