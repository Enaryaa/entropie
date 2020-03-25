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


</head>


<?php
$json = 'http://www.iut-fbleau.fr/projet/maths/?f=logins.json';
$json2= 'http://www.iut-fbleau.fr/projet/maths/?f=pagerank.json';

$jsondata = file_get_contents($json);
$jsondata2= file_get_contents($json2);

$data = json_decode($jsondata,true);
$vote = json_decode($jsondata2, true);

//$result = array_merge($data, $vote);

asort($data);
asort($vote);

foreach($data as $cle=>$valeur) {
    echo($cle.' ');
}
echo(count($data));

/*foreach($vote as $cle=>$valeur) {
    echo($cle.' ');
}
echo(count($vote));*/


$comp=array_intersect_key($data,$vote);
foreach ($comp as $key => $value) {
    print_r($key.' ');
}

echo(count($comp));

?>

</html>