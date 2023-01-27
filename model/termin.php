<?php

class Termin {
    
    public $id;   
    public $vrsta_plesa;   
    public $polaznik;   
    public $datum;   
    public $prostorija;
    
    public function __construct($id=null, $vrsta_plesa=null, $polaznik=null, $datum=null,  $prostorija=null)
    {
        $this->id = $id;
        $this->vrsta_plesa = $vrsta_plesa;
        $this->polaznik = $polaznik;
        $this->prostorija = $prostorija;
        $this->datum = $datum;
    }


    public static function getAll(Broker $broker)
    {
        $query = "SELECT t.*, v.naziv as vrsta_plesa_naziv FROM termin t INNER JOIN vrsta_plesa v on (t.vrsta_plesa=v.id)";
        return $broker->executeQuery($query);
    }

    public static function getById($id,Broker $broker){
        $query = "SELECT * FROM termin WHERE id=$id";
        return $broker->executeQuery($query);
    }

    public static function getAllByVrstaPlesa($id,Broker $broker){
        $query = "SELECT * FROM termin WHERE vrsta_plesa=$id";
        return $broker->executeQuery($query);
    }

    public function deleteById(Broker $broker)
    {
        $query = "DELETE FROM termin WHERE id=$this->id";
        return $broker->executeQuery($query);
    }

    public function update(Termin $termin, Broker $broker)
    {
        $query = "UPDATE termin set vrsta_plesa = $termin->vrsta_plesa,polaznik = '$termin->polaznik',datum = '$termin->datum',prostorija = $termin->prostorija WHERE id=$this->id";
        return $broker->executeQuery($query);
    }

    public static function add(Termin $termin, Broker $broker)
    {
        $query = "INSERT INTO termin(vrsta_plesa, polaznik, datum, prostorija) VALUES('$termin->vrsta_plesa','$termin->polaznik','$termin->datum','$termin->prostorija')";
        return $broker->executeQuery($query);
    }
}

?>