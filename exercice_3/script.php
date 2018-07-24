<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $good = true;
    
    if(empty($_POST['make']) || strlen($_POST['make']) < 2){
    echo 'The word is too short.'; //The Error
    
    $good = false;
    }

    if(empty($_POST['model']) || strlen($_POST['model']) < 2){
    echo 'The word is too short.'; //The Error
    
    $good = false;
    }

    if(empty($_POST['year']) || strlen($_POST['year']) < 2){
    echo 'The word is too short.'; //The Error
    
    $good = false;
    }

    if(empty($_POST['color']) || strlen($_POST['color']) < 2){
    echo 'The word is too short.'; //The Error
    
    $good = false;
    }  

    if($good){
    echo "It's working just fine"; //The Error

    } else{
    http_response_code(400);
    echo 'We have a problem'; //The Error
    }   
}

else{
http_response_code(405);
echo 'nok'; //The Error
}