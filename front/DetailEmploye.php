<?php

require_once '../dao/EmployeDao.php';
require_once '../dao/ServiceDao.php';

$employeDao = new EmployeDao();
$serviceDao = new serviceDao();
$employe = $employeDao->getById($_GET['numeroEmploye']);
$service = $serviceDao->getById($employe->getNoserv());

?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>
    <?php
    echo "<h1>Detail de l'employé " . $employe->getNom() . " : </h1>";
    ?>
    <ul>
        <?php
        echo "<li>Numero employé: " . $employe->getNumeroEmploye() . " </li>";
        echo "<li>Nom: " . $employe->getNom() . "</li>";
        echo "<li>Prénom: " . $employe->getPrenom() . "</li>";
        echo "<li>emploi: " . $employe->getEmploi() . "</li>";
        echo "<li>supérieur: " . $employe->getSup() . "</li>";
        echo "<li>Date d'embauche: " . $employe->getDateEmbauche() . "</li>";
        echo "<li>Salaire: " . $employe->getSalaire() . "</li>";
        echo "<li>Commission: " . $employe->getCommission() . "</li>";
        echo "<li>Numéro de service: " . $employe->getNoserv() . "</li>";
        echo "<li>Nom: ".$service->getNom()."</li>";
        echo "<li>Ville: ". $service->getVille()."</li>";
        ?>
    </ul>
</body>

</html>