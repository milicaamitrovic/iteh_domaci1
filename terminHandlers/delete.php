<?php

require "../broker.php";
require "../model/termin.php";

$broker=Broker::getBroker();

if(isset($_POST['id'])){
    $termin = new Termin($_POST['id']);
    $rezultat = $termin->deleteById($broker);
    if(!$rezultat){
        echo $broker->getMysqli()->error;
     }else{
         echo '1';
     }
}

?>