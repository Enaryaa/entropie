<?php
include './listeVotant.php';
include './entropie.php';
include './probabilite.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Resultat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <?php 
    
    $data = liste();
    $login = login_list();
    $entropie = entropie_list();
    $distribution = distributionLogin($data);
    $stats = $login[$_POST['login']];
    $cas_par_matiere = nbreCasPossible($data);
    $distributionGlobal = distributionGlobal($data, $cas_par_matiere);

    ?>

</head>

<body class="bg-secondary">
    <!-- Header -->
    <header class="bg-danger">
        <div class="col-lg-12">
            <p class="text-center text-uppercase font-weight-bold">
                Affichage résultat
            </p>
        </div>
    </header>

    <div class="container">

    <div class="row ">
            <!-- Section 1 -->
            <section class="col-lg-6 bg-secondary">
                <form action=" " method="post">
                    <div class="form-group">
                        <label for="matiere"  class="font-weight-bold">Choix de la Matière</label>
                        <select class="form-control bg-dark text-light" id="matiere" name="matiere">
                            <opiton>ACDA</option>
                                <option>ANG</option>
                                <option>APL</option>
                                <option>ART</option>
                                <option>ASR</option>
                                <option>EC</option>
                                <option>EGOD</option>
                                <option>MAT</option>
                                <option>SGBD</option>
                                <option>SPORT</option>
                        </select>
                    </div>
            </section>

    
            <section class="col-lg-6 bg-secondary">
                    <div class="form-group">
                        <label for="login"  class="font-weight-bold">Votants</label>
                        <select class="form-control bg-dark text-light" id="login" name="login">
                           
                                <?php
                        foreach ($login as $key => $value) {
                            
                            echo "
                                    <option>
                                        $key
                                    </option>
                            ";
                        }
                        
                        ?>
                        </select>
                    </div>
                    <button class="btn btn-danger" type="submit">OK !</button>
                </form>
            </section>

    <div class="card text-center border-light  mb-3" style="max-width: 13rem;">
        <div class="card-header">Score de pertinence de <?php echo $stats; ?><br> Matière : <?php echo $_POST["matiere"]; ?></div>
            <div class="card-body">
                <h5 class="card-title"> <?php 
               /* 
                foreach ($entropie as $key => $value) {
                    if ($key == $_POST['login']) {               
                        foreach ($value as $nb) {
                           
                            echo $nb; 
                            if ($value == $_POST['matiere']) {
                                echo 'coucou3';
                                echo $nb;
                            }
                        }
                    }
                }*/
                 
            $stats = $entropie[$_POST['login']];
            echo  $mat = $stats[$_POST['matiere']];
                
            ?></h5>
        </div>
    </div>

    
  
        </div>
        <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
        <br>
        <div id='myDiv2' style='margin-bottom:50px;'><!-- Plotly chart will be drawn inside this DIV --></div>
        <!-- Footer -->
        <footer class="row">

        </footer>

    </div>
</body>


<script>
    var login = "<?php echo $_POST['login'] ?>";
    var matiere = "<?php echo $_POST["matiere"]; ?>";
    var vote = <?php  echo json_encode( $distribution) ;?>;
    var globalvote = <?php  echo json_encode( $distributionGlobal) ;?> ;

    var temp = [];
    var temp2 = [];
    var glob = [];
    var glob2 = [];

    // console.log(globalvote[matiere]);
    for(let key in vote[login][matiere])
    {
        temp.push(key) ;
        temp2.push(vote[login][matiere][key]);
    }
    for(let key in globalvote[matiere])
    {
        glob.push(key) ;
        glob2.push(globalvote[matiere][key]);
    }
    
   
    var trace1 = {
        type: 'bar',
        x: temp,
        y: temp2,
        marker: {
            color: '#dc3545',
            line: {
                width: 1
            }
        }
    };
    var trace2 = {
        type: 'bar',
        x: glob,
        y: glob2,
        marker: {
            color: '#dc3545',
            line: {
                width: 1
            }
        }
    };

    var data = [ trace1 ];
    var data2 = [ trace2 ];


    var layout = { 
    title: 'Liste des Votants',
    font: {size: 18}
    };
    var layout2 = { 
    title: 'Votes Globaux',
    font: {size: 18}
    };

    var config = {responsive: true}

    Plotly.newPlot('myDiv', data, layout, config );
    Plotly.newPlot('myDiv2', data2, layout, config );
  
  </script>
</html>