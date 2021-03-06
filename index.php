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
<?php
    $titre = "Votes";
?>
<body class="bg-primary">
    <!-- Header -->
    <header class="bg-danger">
        <div class="col-lg-12">
            <p class="text-center text-uppercase font-weight-bold">
                <?php
                    if (true) {
                        $titre = "TEST";
                    }
                    echo $titre;
                ?>
            </p>
        </div>
    </header>

    <div class="container">

        <div class="row ">
            <!-- Section 1 -->
            <section class="col-lg-12 bg-secondary">
                <form>
                    <div class="form-group">
                        <label for="matiere" class="font-weight-bold">Matières</label>
                        <select class="form-control" id="matiere">
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

            <!-- Section 2 -->
            <section class="col-md-3 col-lg-6 bg-primary">
                <h2>Listes des votants</h2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>
                                Nom
                            </th>
                            <th>
                                Score
                            </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bob</td>
                            <td>5.33</td>
                        </tr>
                        <tr>
                            <td>Bob</td>
                            <td>5.33</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="col-md-3 col-lg-6 bg-primary">
                <h2>Graphiques</h2>
                
            </section>

        </div>
        <!-- Footer -->
        <footer class="row">

        </footer>

    </div>
</body>

</html>