<?php


class DB
{

    private $dbh;
    private $class;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=php1;dbhost=localhost','root','death9393');
        $this->dbh->exec('SET CHARSET utf8');
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getALL($sql,$params=[])
    {
        $sth= $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS,$this->class);
    }

}