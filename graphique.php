<?php

include './probabilite.php';
include './entropie.php';
include './listeVotant.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entropie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <?php 
    
    $data = liste();

    $distributionGlobal = distributionGlobal($data);
    $distributionLogin = distributionLogin($data);

    $cas_par_matiere = nbreCasPossible($distributionGlobal);

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

     

        </div>
        <!-- Footer -->
        <footer class="row">

        </footer>

    </div>
</body>

</html>