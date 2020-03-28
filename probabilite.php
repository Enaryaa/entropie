<?php

//  fonction permet de compter nombre de vote dans une matiere donnée
function nbreVotesPossibles($data, $matiere){
    $total = 0;
    foreach($data as $key){
        $total = $total + count($key[$matiere]);
    }

    return $total;
}

//  fonction permet de compter nombre de votes favorables à une personne selon la matière
function nbreVotesFavorables($data, $pseudo, $matiere){
    $total = 0;
    foreach($data as $key){
        foreach($key[$matiere] as $value){
            if($value == $pseudo){
                $total++;
            }
        }
    }

    return $total;
}

//  fonction qui calcule la probabilite theorique
function probabiliteTheorique($data, $pseudo, $matiere){
    $nbreFav = nbreVotesFavorables($data, $pseudo, $matiere);
    $nbrePoss = nbreVotesPossibles($data, $matiere);

    return ($nbreFav / $nbrePoss) * 100;
}

?>