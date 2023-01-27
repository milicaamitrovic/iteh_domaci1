<?php

require "../broker.php";
require "../model/vrsta_plesa.php";

$broker=Broker::getBroker();

if(isset($_POST['naziv']) && isset($_POST['koreograf'])) {
    
    $vrsta_plesa = new VrstaPlesa(null,$_POST['naziv'],$_POST['koreograf']);
    $rezultat = VrstaPlesa::add($vrsta_plesa, $broker);

    if(!$rezultat){
        echo $broker->getMysqli()->error;
     }else{ 
         echo '1';
     }
}


?>