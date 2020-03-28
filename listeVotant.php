


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
    $json = 'http://www.iut-fbleau.fr/projet/maths/?f=logins.json';
    $json2= 'http://www.iut-fbleau.fr/projet/maths/?f=pagerank.json';

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

?>
	<div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
</html>
<script src='votants.js'></script>