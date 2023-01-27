<?php

class VrstaPlesa {
    
    public $id;   
    public $naziv;   
    public $koreograf;   
    
    public function __construct($id=null, $naziv=null, $koreograf=null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->koreograf = $koreograf;
    }

    public static function getAll(Broker $broker)
    {
        $query = "SELECT v.*, k.imePrezime as koreograf_imePrezime, count(t.id) as broj_termina FROM vrsta_plesa v 
        INNER JOIN koreograf k on (v.koreograf=k.id) LEFT JOIN termin t on (v.id=t.vrsta_plesa) GROUP BY v.id ORDER BY v.id";
        return $broker->executeQuery($query);
    }

    public static function getById($id,Broker $broker){
        $query = "SELECT * FROM vrsta_plesa WHERE id=$id";
        return $broker->executeQuery($query);

    }

    public function deleteById(Broker $broker)
    {
        $query = "DELETE FROM vrsta_plesa WHERE id=$this->id";
        return $broker->executeQuery($query);
    }

    public function update(VrstaPlesa $vrsta_plesa,Broker $broker)
    {
        $query = "UPDATE vrsta_plesa set naziv = '$vrsta_plesa->naziv',koreograf = $vrsta_plesa->koreograf WHERE id=$this->id";
        return $broker->executeQuery($query);
    }
  
    public static function add(VrstaPlesa $vrsta_plesa,Broker $broker)
    {
        $query = "INSERT INTO vrsta_plesa(naziv, koreograf) VALUES('$vrsta_plesa->naziv','$vrsta_plesa->koreograf')";
        return $broker->executeQuery($query);
    }
}

?>