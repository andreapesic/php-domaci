<?php

require './Broker.php';
$broker=Broker::getBroker();

class Termin {
    
    public $id;   
    public $usluga;   
    public $klijent;   
    public $datum;   
    public $prostorija;
    
    public function __construct($id=null, $usluga=null, $klijent=null, $prostorija=null, $datum=null)
    {
        $this->id = $id;
        $this->usluga = $usluga;
        $this->klijent = $klijent;
        $this->prostorija = $prostorija;
        $this->datum = $datum;
    }


    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM termin";
        return $broker->executeQuery($query);
    }

    public static function getById($id){
        $query = "SELECT * FROM termin WHERE id=$id";
        return $broker->executeQuery($query);
    }

    public static function getAllByUsluga($id){
        $query = "SELECT * FROM termin WHERE usluga=$id";
        return $broker->executeQuery($query);
    }

    public function deleteById()
    {
        $query = "DELETE FROM termin WHERE id=$this->id";
        return $broker->executeQuery($query);
    }

    public function update(Tremin $termin)
    {
        $query = "UPDATE termin set usluga = $termin->usluga,klijent = $termin->klijent,datum = $termin->datum,prostorija = $termin->prostorija WHERE id=$this->id";
        return $broker->executeQuery($query);
    }

    public static function add(Tremin $termin)
    {
        $query = "INSERT INTO termin(usluga, klijent, datum, prostorija) VALUES('$termin->usluga','$termin->klijent','$termin->datum','$termin->prostorija')";
        return $broker->executeQuery($query);
    }
}

?>