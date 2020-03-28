<?php


//  data contenant les bons logins avec leurs votes
//  et c'est tout !


function distributionLogin($data){
    $distribution = array();
    //  pacours array 1
    foreach($data as $login => $matiere){
        //  parcours array 2
        //  $key est la matière et $value est les votes de $login sur la $matiere
        foreach ($matiere as $key => $value) {
            $total = count($value);
            //  parcours array 3
            //  $vote est la personne vote
            foreach($value as $id => $vote){
                $distribution[$login][$key][$vote] = 1 / $total;
            }
        }
    }

    return $distribution;
}

function distributionGlobal($data){
    $distribution = array();
    //  pacours array 1
    foreach($data as $login => $matiere){
        //  parcours array 2
        //  $key est la matière et $value est les votes de $login sur la $matiere
        foreach ($matiere as $key => $value) {
            if(array_key_exists($key,$distribution)){
                foreach($value as $id => $vote){
                    if(array_key_exists($vote, $distribution[$key])){
                        $distribution[$key][$vote]++;
                    }
                    else{
                        $distribution[$key][$vote] = 1;
                    }
                    
                }
            }
            else{
                $distribution[$key] = array();

                foreach($value as $id => $vote){

                    $distribution[$key][$vote] = 1;
                
                }
            }
        }
    }

    return $distribution;
}

?>