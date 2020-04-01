<?php

//  distribution des votes pour chaque votant
function distributionLogin($data){
    $distribution = array();
    //  pacours array 1 : parcours les votes d'un votant dans les matières
    //  $login correspond à un votant
    //  $matiere correspond à la liste des matiere avec les votes de $login
    foreach($data as $login => $matiere){
        //  parcours array 2 : parcours les votes dans une matière d'un votant
        //  $key correspond au nom d'une matière 
        //  $value correspond à la liste des votes du votant dans la matière $key
        foreach ($matiere as $key => $value) {
            $total = count($value);
            //  parcours array 3 : parcours chaque vote du votant dans une matière
            //  $id correspond à l'id du voté $vote (pas très important);
            //  $vote correspond à la personne votée par le votant $login dans la matière $key
            foreach($value as $id => $vote){
                $distribution[$login][$key][$vote] = 1 / $total;
            }
        }
    }
    //  retourne la distribution uniforme de chaque votant $login
    return $distribution;
    
}

//  A revoir car pas sûr du résultat
function distributionGlobal($data, $cas_par_matiere){
    $distribution = array();
    foreach($data as $matiere){
        foreach ($matiere as $key => $value) {
            if(array_key_exists($key,$distribution)){
                foreach($value as $vote){
                    if(array_key_exists($vote, $distribution[$key])){
                        $distribution[$key][$vote]++;
                    }
                    else{
                        $distribution[$key][$vote] = 1 ;
                    }
                    
                }
            }
            else{
                $distribution[$key] = array();

                foreach($value as $vote){

                    $distribution[$key][$vote] = 1;
                
                }
            }
        }
    }

    foreach($distribution as $matiere => $login){
        foreach($login as $vote => $proba){
            $distribution[$matiere][$vote] = ($distribution[$matiere][$vote] / $cas_par_matiere[$matiere]);
        }
    }

    //  retourne la distribution global dans chaque matière
    return $distribution;
    
}

//  fonction qui calcule l'entropie de chaque personne 
//  Q étant le distribution du votant (normalement uniforme)
//  P étant la distribution global
//  D(Q || P) = SOMME(Q(i) * ln(Q(i) / P(i)))
//  log(float $arg, float $base);

function entropie($distributionLogin, $distributionGlobal){

    $score = array();
    $res = 0;

    foreach($distributionLogin as $nom_votant => $matieres){

        $score[$nom_votant] = array();
        foreach($matieres as $nom_matiere => $votes){
            $score[$nom_votant][$nom_matiere] = 0;
            foreach($votes as $nom_vote => $proba){
                $q = $distributionLogin[$nom_votant][$nom_matiere][$nom_vote];
                $p = $distributionGlobal[$nom_matiere][$nom_vote];
                $res += $q * log(($q/$p), 2);
            }

            $score[$nom_votant][$nom_matiere] = $res;
            $res = 0;
        }

    }

    return $score;
 
}

?>