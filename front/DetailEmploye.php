<?php

require_once '../dao/EmployeDao.php';
require_once '../dao/ServiceDao.php';

$employeDao = new EmployeDao();
$serviceDao = new serviceDao();
$employe = $employeDao->getById($_GET['numeroEmploye']);
$monService = $serviceDao->getById($employe->getService()->getNumeroService());
$employe->setService($monService);
//$service = $serviceDao->getById($employe->getNumeroEmploye());

?>
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
        echo "<h1 class='form-h1'>Detail de l'employé " . $employe->getNom() . " : </h1>";
        ?>
        <ul>
            <?php
            echo "<li class='list-group-item'>Numero employé: " . $employe->getNumeroEmploye() . " </li>";
            echo "<li class='list-group-item'>Nom: " . $employe->getNom() . "</li>";
            echo "<li class='list-group-item'>Prénom: " . $employe->getPrenom() . "</li>";
            echo "<li class='list-group-item'>emploi: " . $employe->getEmploi() . "</li>";
            echo "<li class='list-group-item'>supérieur: " . $employe->getSuperieur()->getNumeroEmploye() . "</li>";
            echo "<li class='list-group-item'>Date d'embauche: " . $employe->getDateEmbauche() . "</li>";
            echo "<li class='list-group-item'>Salaire: " . $employe->getSalaire() . "</li>";
            echo "<li class='list-group-item'>Commission: " . $employe->getCommission() . "</li>";
            echo "<li class='list-group-item'>Numéro de service: " . $employe->getService()->getNumeroService() . "</li>";
            echo "<li class='list-group-item'>Nom: " . $monService->getNom() . "</li>";
            echo "<li class='list-group-item'>Ville: " . $monService->getVille() . "</li>";
            ?>
        </ul>
    </div>
</body>

</html>