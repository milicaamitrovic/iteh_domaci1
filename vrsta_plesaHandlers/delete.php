<?php

require "../broker.php";
require "../model/vrsta_plesa.php";

$broker=Broker::getBroker();

if(isset($_POST['id'])){
    $vrsta_plesa = new VrstaPlesa($_POST['id']);
    $rezultat = $vrsta_plesa->deleteById($broker);
    if(!$rezultat){
        echo $broker->getMysqli()->error;
     }else{
         echo '1';
     }
}

?>