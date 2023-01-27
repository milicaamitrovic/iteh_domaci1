<?php

require "../model/vrsta_plesa.php";
require '../broker.php';

$broker=Broker::getBroker();

    $resultSet = VrstaPlesa::getAll($broker);
    $response=[];

    if(!$resultSet){
    $response['status']=0;
    $response['greska']=$broker->getMysqli()->error;
    } 
    else{
    $response['status']=1;
    while($row=$resultSet->fetch_object()){
        $response['vrste_plesova'][]=$row;
    }
}
    echo json_encode($response);


?>