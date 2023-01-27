<?php

require "../broker.php";
require "../model/termin.php";

$broker=Broker::getBroker();

if(isset($_POST['vrsta_plesa']) && isset($_POST['polaznik']) 
&& isset($_POST['datum']) && isset($_POST['prostorija'])){
    $termin = new Termin(null,$_POST['vrsta_plesa'],$_POST['polaznik'],$_POST['datum'],$_POST['prostorija'] );
    $rezultat = Termin::add($termin, $broker);

    if(!$rezultat){
        echo $broker->getMysqli()->error;
     }else{ 
         echo '1';
     }
}


?>