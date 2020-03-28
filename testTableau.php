<?php

include './probabilite.php';
include './entropie.php';
include './listeVotant.php';

$json = 'http://www.iut-fbleau.fr/projet/maths/?f=logins.json';
$json2= 'http://www.iut-fbleau.fr/projet/maths/?f=pagerank.json';


$data = liste();

$distributionGlobal = distributionGlobal($data);
$distributionLogin = distributionLogin($data);

$cas_par_matiere = nbreCasPossible($distributionLogin);

//var_dump($cas_par_matiere);
//var_dump(distributionGlobal($data));
var_dump(distributionLogin($data));

?>