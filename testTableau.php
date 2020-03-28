<?php

include './probabilite.php';
include './entropie.php';

$json = 'http://www.iut-fbleau.fr/projet/maths/?f=logins.json';
$json2= 'http://www.iut-fbleau.fr/projet/maths/?f=pagerank.json';


$data = json_decode(file_get_contents($json2),true);
//var_dump($data);
$test = array();

//  pacours array 1
foreach($data as $login => $matiere){
    //$test[$login] = array();
    //  parcours array 2
    //  $key est la matière et $value est les votes de $login sur la $matiere
    foreach ($matiere as $key => $value) {
        $total = count($value);
        //$test[$login][$key] = array();
        //  parcours array 3
        //  $vote est la personne vote
        foreach($value as $id => $vote){
            $test[$login][$key][$vote] = 1 / $total;
        }
    }
}

var_dump(distributionGlobal($data));
//var_dump(distributionLogin($data));
//var_dump(nbreCasPossible(distributionGlobal($data), 'ACDA'));

?>