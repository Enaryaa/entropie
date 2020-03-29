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
            $distribution[$matiere][$vote] = ($distribution[$matiere][$vote] / $cas_par_matiere[$matiere])*100;
        }
    }

    return $distribution;
}

?>