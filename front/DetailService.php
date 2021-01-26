<?php

require_once '../dao/ServiceDao.php';

$serviceDao = new ServiceDao();

$service = $serviceDao->getById($_GET['numeroService']);
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>
    <?php
    echo "<h1>Detail du service " . $service->getNom() . " : </h1>";
    ?>
    <ul>
        <?php
        echo "<li>Numero service: " . $service->getNumeroService() . " </li>";
        echo "<li>Nom: " . $service->getNom() . "</li>";
        echo "<li>Ville: " . $service->getVille() . "</li>";
        ?>
    </ul>
</body>

</html>