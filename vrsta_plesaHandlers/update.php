<?php

require "../broker.php";
require "../model/vrsta_plesa.php";

$broker=Broker::getBroker();

if(isset($_POST['id']) && isset($_POST['naziv']) && isset($_POST['koreograf'])) {

    $vrstaPlesaKojaSeMenja = new VrstaPlesa($_POST['id'], null, null);
    $vrstaPlesaKojomSeMenja = new VrstaPlesa(null,$_POST['naziv'],$_POST['koreograf']);
    $rezultat = $vrstaPlesaKojaSeMenja->update($vrstaPlesaKojomSeMenja, $broker);

    if(!$rezultat){
        echo $broker->getMysqli()->error;
     }else{ 
         echo '1';
     }
}

?>