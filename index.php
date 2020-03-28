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
                Entropie
            </p>
        </div>
    </header>

    <div class="container">

        <div class="row ">
            <!-- Section 1 -->
            <section class="col-lg-6 bg-secondary">
                <form action="./index.php">
                    <div class="form-group">
                        <label for="matiere" class="font-weight-bold">Choix de la Matière</label>
                        <select class="form-control bg-dark text-light" id="matiere">
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
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </section>

            <section class="col-lg-6 bg-secondary">
                <form action="./index.php">
                    <div class="form-group">
                        <label for="matiere" class="font-weight-bold">Votants</label>
                        <select class="form-control bg-dark text-light" id="matiere">
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
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </section>

            <!-- Section 2 -->
            <section class="col-md-3 col-lg-6">
                <h2 class="font-weight-bold">Listes des votants</h2>
                <table class="table table-dark table-hover table-bordered">
                    <thead class="text-center bg-danger">
                        <tr>
                            <th>
                                Votants
                            </th>
                            <th>
                                Score
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($comp as $key => $value) {
                            $proba = probabiliteTheorique($vote,$key);
                            echo "
                                <tr>
                                    <th>
                                        $value
                                    </th>
                                    <th>
                                        $proba
                                    </th>
                                </tr>
                            ";
                        }
                        
                        ?>
                    </tbody>
                </table>
            </section>

            <section class="col-md-3 col-lg-6">
            </section>

        </div>
        <!-- Footer -->
        <footer class="row">

        </footer>

    </div>
</body>

</html>