<?php

require "../model/koreograf.php";
require '../broker.php';

$broker=Broker::getBroker();

if(isset($_POST['id'])){
    $resultSet = Koreograf::getById($_POST['id'], $broker);
    $response=[];

    if(!$resultSet){
    $response['status']=0;
    $response['greska']=$broker->getMysqli()->error;
    } 
    else{
    $response['status']=1;
    while($row=$resultSet->fetch_object()){
        $response['koreograf'][]=$row;
    }
}
    echo json_encode($response);
}

?>