<?php

require './Broker.php';
$broker=Broker::getBroker();

class Pruzalac{
    
    public $id;   
    public $imePrezime;   
    
    public function __construct($id=null, $imePrezime=null)
    {
        $this->id = $id;
        $this->imePrezime = $imePrezime;
       
    }

    public static function getAll()
    {
        $query = "SELECT * FROM pruzalac";
        return $broker->executeQuery($query);
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM pruzalac WHERE id=$id";
        return $broker->executeQuery($query);
 
    }
}

?>