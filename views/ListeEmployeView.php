
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
    <link href="../css/form-validation.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>
    <h1 class="form-h1">Liste employés : </h1>


    <?php
    
    if (empty($employes)) {
        echo "<h1> Liste vide </h1>";
    } else {
    
    ?>
    <div class="form-group-div">
        <table class="table">
            <tr>
                <th scope="col">Numero employé</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">emploi</th>
                <th scope="col">supérieur</th>
                <th scope="col">Date d'embauche</th>
                <th scope="col">Salaire</th>
                <th scope="col">Commission</th>
                <th scope="col">Numéro de service</th>
                <th scope="col">Service</th>
                <th scope="col">Ville</th>
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
            echo $employe->getSuperieur()->getNumeroEmploye();
            echo "</td>";
            echo "<td>";
            echo $employe->getDateEmbauche() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getSalaire() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getCommission() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getService()->getNumeroService() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getService()->getNom() . "\t";
            echo "</td>";
            echo "<td>";
            echo $employe->getService()->getVille() . "\t";
            echo "</td>";
            echo "<td>";
            echo "<a href='../front/SupprimerEmploye.php?numeroEmploye=" . $employe->getNumeroEmploye() . "'>supprimer</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='../front/AfficherModificationEmploye.php?numeroEmploye=" . $employe->getNumeroEmploye()."&sup=".$employe->getSuperieur()->getNumeroEmploye() . "'>modifier</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
        ?>
        </table>
        </div>
</body>

</html>