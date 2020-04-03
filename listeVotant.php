


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entropie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
    
</head>


<?php

function liste(){
    
    $json = './json/login.json';
    $json2= './json/vote.json';

    $jsondata = file_get_contents($json);
    $jsondata2= file_get_contents($json2);

    $data = json_decode($jsondata,true);
    $vote = json_decode($jsondata2, true);

    asort($data);

    $comp=array_intersect_key($data,$vote);
    

    $result=array_merge($comp,$vote);

    $tri = array_intersect_key($result, $comp);

    $result2=array_merge($comp,$tri);
    
    return $result2;

}

function login_list(){

    $file = './json/votant.json';

    $jsondata = file_get_contents($file);


    $list = json_decode($jsondata,true);
    asort($list);

    return $list;

}

function entropie_list(){

    $file = './json/entropie.json';

    $jsondata = file_get_contents($file);


    $list = json_decode($jsondata,true);

    return $list;

}


// include './testTableau.php';

// $data = liste();

// $distributionLogin = distributionLogin($data);


?>
	
</html>
