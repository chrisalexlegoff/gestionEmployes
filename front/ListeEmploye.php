<?php

require_once '../dao/EmployeDao.php';
$employeDao = new EmployeDao();


?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>
    <h1>Liste services : </h1>


    <?php
    $employes = $employeDao->getAll();
    if (empty($employes)) {
        echo "<h1> Liste vide </h1>";
    } else {
    ?>
        <table>
            <tr>
                <th>Numero employé</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>emploi</th>
                <th>supérieur</th>
                <th>Date d'embauche</th>
                <th>Salaire</th>
                <th>Commission</th>
                <th>Numéro de service</th>
            </tr>
        <?php

        foreach ($employes as $employe) {
            echo "<tr>";
            echo "<td>";
            echo $employe->getNumeroEmploye() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getNom() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getPrenom() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getEmploi() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getSup($employe->setSup($employe->getEmploi())) . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getDateEmbauche() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getCommission() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getNoserv() . "\t";
            echo "</td>";
            echo "<td>";
            echo "<a href='./SupprimerEmploye.php?numeroService=" . $employe->getNumeroEmploye() . "'>supprimer</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='./AfficherModificationEmploye.php?numeroEmploye=" . $employe->getNumeroEmploye() . "'>modifier</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
        ?>
        </table>
    
</body>

</html>