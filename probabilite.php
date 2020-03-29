<?php

//  Applicable seulement sur la distribution globale
function nbreCasPossible($data){
    $tab = array();

    foreach($data as $login => $matiere){
        foreach($matiere as $key => $value){
            if(array_key_exists($key,$tab)){
                $tab[$key] = $tab[$key] + count($value);
            }
            else{
                $tab[$key] = count($value);
            }
        }
    }
    return $tab;
}



//  fonction qui calcule la probabilite theorique
//  nbreDeCasFavorables / nbreDeCasPossibles

?>