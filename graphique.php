
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

</head>

<body class="bg-secondary">
    <!-- Header -->
    <header class="bg-danger">
        <div class="col-lg-12">
            <p class="text-center text-uppercase font-weight-bold">
                Affichage résultat
                <?php echo $_POST["login"]; ?>
            </p>
        </div>
    </header>

    <div class="container">

    <div class="row ">
            <!-- Section 1 -->
            <section class="col-lg-6 bg-secondary">
                <form action="./graphique.php" method="post">
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
                </form>
            </section>

    
            <section class="col-lg-6 bg-secondary">
                    <div class="form-group">
                        <label for="matiere" class="font-weight-bold">Votants</label>
                        <select class="form-control bg-dark text-light" id="login">
                           
                                <?php
                        foreach ($data as $key => $value) {
                            
                            echo "
                                    <option>
                                        $key
                                    </option>
                            ";
                        }
                        
                        ?>
                        </select>
                    </div>
                    <a class="btn btn-danger" href="./graphique.php" role="button">OK !</a>
                </form>
            </section>

    <div class="card text-center border-light  mb-3" style="max-width: 13rem;">
        <div class="card-header">Score de pertinence</div>
            <div class="card-body">
                <h5 class="card-title">67</h5>
            </div>
    </div>

    
  
        </div>
        <!-- Footer -->
        <footer class="row">

        </footer>

    </div>
</body>

</html>