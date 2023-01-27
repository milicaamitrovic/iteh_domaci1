<?php

require "../model/vrsta_plesa.php";
require '../broker.php';

$broker=Broker::getBroker();

if(isset($_GET['id'])){
    $resultSet = VrstaPlesa::getById($_GET['id'], $broker);
    $response=[];

    if(!$resultSet){
    $response['status']=0;
    $response['greska']=$broker->getMysqli()->error;
    } 
    else{
    $response['status']=1;
    $response['vrsta_plesa']=$resultSet->fetch_object();
    
}
    echo json_encode($response);
}

?>