<?php

//  Applicable seulement sur la distribution globale
function nbreCasPossible($data){
    $tab = array();

    foreach($data as $matiere => $login){
        $tab[$matiere] = 0;
        foreach($login as $nom => $nbre){
            $tab[$matiere] = $tab[$matiere] + $nbre;
        }
    }
    return $tab;
}



//  fonction qui calcule la probabilite theorique
//  nbreDeCasFavorables / nbreDeCasPossibles

?>