<?php

require_once 'ServiceDao.php';

$serviceDao = new ServiceDao();

$service = $serviceDao->getById($_GET['numeroService']);
?>
<html>

<head>
    <title>liste service</title>
</head>

<body><?php
        echo "<h1>Detail du service " . $service->getNom() . " : </h1>";
        ?>
    <ul>
    <?php 
        echo "<li>Numero service: ".$service->getNumeroService()." </li>";
        echo "<li>Nom: ".$service->getNom()."</li>";
        echo "<li>Ville: ". $service->getVille()."</li>";
        ?> 
    </ul>
</body>

</html>