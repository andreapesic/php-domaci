<?php

require './Broker.php';
$broker=Broker::getBroker();

class Usluga {
    
    public $id;   
    public $naziv;   
    public $pruzalac;   
    
    public function __construct($id=null, $naziv=null, $pruzalac=null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->pruzalac = $pruzalac;
     
    }

    public static function getAll()
    {
        $query = "SELECT * FROM usluga";
        return $broker->executeQuery($query);
    }

    public static function getById($id){
        $query = "SELECT * FROM usluga WHERE id=$id";
        return $broker->executeQuery($query);

    }

    public function deleteById()
    {
        $query = "DELETE FROM usluga WHERE id=$this->id";
        return $broker->executeQuery($query);
    }

    # ili da zovemo nad objektom koji menjamo a prosledjujemo id
    public function update(Usluga $usluga)
    {
        $query = "UPDATE usluga set naziv = $usluga->naziv,pruzalac = $usluga->pruzalac WHERE id=$this->id";
        return $broker->executeQuery($query);
    }
  
    public static function add(Usluga $usluga)
    {
        $query = "INSERT INTO usluga(naziv, pruzalac) VALUES('$usluga->naziv','$usluga->pruzalac')";
        return $broker->executeQuery($query);
    }
}

?>