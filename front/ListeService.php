<?php

require_once 'ServiceDao.php';
$serviceDao = new ServiceDao();


?>
<html>

<head>
    <title>liste service</title>
</head>

<body>
    <h1>Liste services : </h1>


    <?php
    $services = $serviceDao->getAll();
    if (empty($services)) {
        echo "<h1> Liste vide </h1>";
    } else {
    ?>
        <table>
            <tr>
                <th>Numero service</th>
                <th>Nom</th>
                <th>Ville</th>
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
            echo "|" . $service->getNumeroService() . "|";
            echo "<a href='./SupprimerService.php?numeroService=" . $service->getNumeroService() . "'>supprimer</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
        ?>
        </table>
</body>

</html>