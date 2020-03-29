<?php

include './probabilite.php';
include './entropie.php';
include './listeVotant.php';

$json = 'http://www.iut-fbleau.fr/projet/maths/?f=logins.json';
$json2= 'http://www.iut-fbleau.fr/projet/maths/?f=pagerank.json';


$data = liste();


$distributionLogin = distributionLogin($data);

$cas_par_matiere = nbreCasPossible($distributionLogin);
$distributionGlobal = distributionGlobal($data,$cas_par_matiere);
//var_dump($cas_par_matiere);
var_dump($distributionGlobal);
//var_dump($distributionLogin);
//echo $distributionLogin['bargoni']['ACDA']['mana'];
?>