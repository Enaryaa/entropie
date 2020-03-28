<?php

//  Applicable seulement sur la distribution globale
function nbreCasPossible($data){
    $tab = array();

    foreach($data as $login => $matiere){
        foreach($matiere as $key => $value){
            echo count($value);
        }
    }
    return $tab;
}



//  fonction qui calcule la probabilite theorique
//  nbreDeCasFavorables / nbreDeCasPossibles

?>