
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="../css/form-validation.css" rel="stylesheet">

<link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>
<body>
<?php require '../front/navbar.php' ?>
    <h1 class="form-h1">Liste services : </h1>


    <?php
   
    if (empty($services)) {
        echo "<h1> Liste vide </h1>";
    } else {
    ?>
    <div class="form-group-div">
        <table class="table">
            <tr>
                <th scope="col">Numero service</th>
                <th scope="col">Nom</th>
                <th scope="col">Ville</th>
            </tr>
        <?php

        foreach ($services as $service) {
            echo "<tr>";
            echo "<td>";
            echo $service->getNumeroService() . "\t";
            echo "</td>";
            echo "<td>";
            echo $service->getNom() . "\t";
            echo "</td>";
            echo "<td>";
            echo $service->getVille() . "\t";
            echo "</td>";
            echo "<td>";
            echo "<a href='./SupprimerService.php?numeroService=" . $service->getNumeroService() . "'>supprimer</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='./AfficherModificationService.php?numeroService=" . $service->getNumeroService() . "'>modifier</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
        ?>
        </table>
</body>

</html>