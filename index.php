<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Gestion employes</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
    <?php require 'front/navbar.php' ?>
    <div class="container">

        <h1>Bienvenue sur l'application de gestion des employés</h1>
        <p class="lead">Système de gestion en deux parties : employés | Services.</p>
        <div class="grid-block">
            <h2>Employés</h2>
            <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

            <div class="row">
                <div class="col-md-4">
                    <li><a href="controllers/ListeEmployeController.php">Liste des employés</a></li>
                </div>
                <div class="col-md-4">
                    <li><a href="controllers/CreationEmployeController.php">Créer employé</a></li>
                </div>
            </div>
        </div>
        <div class="grid-block">
            <h2>Services</h2>
            <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

            <div class="row">
                <div class="col-md-4">
                    <li><a href="controllers/ListeServiceController.php">Listes Services</a></li>
                </div>
                <div class="col-md-4">
                    <li><a href="front/afficherCreationService.php">Créer service</a></li>
                </div>
            </div>
        </div>

    </div>
    <!-- /container -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>