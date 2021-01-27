<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="../css/form-validation.css" rel="stylesheet">
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>
    <div class="form-group-div">
    <?php
    echo "<h1 class='form-h1'>Detail du service " . $service->getNom() . " : </h1>";
    ?>
    <ul>
        <?php
        echo "<li class='list-group-item'>Numero service: " . $service->getNumeroService() . " </li>";
        echo "<li class='list-group-item'>Nom: " . $service->getNom() . "</li>";
        echo "<li class='list-group-item'>Ville: " . $service->getVille() . "</li>";
        ?>
    </ul>
    </div>
</body>

</html>