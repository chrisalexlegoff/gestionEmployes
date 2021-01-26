<?php

require_once '../dao/ServiceDao.php';
$serviceDao = new ServiceDao();

if ($_POST['ville'] == "" || $_POST['nom'] == "") {
    header('Location: ../index.php');
} else {
    $ville = $_POST['ville'];
    $nom = $_POST['nom'];

    $newService = new Service(null, $nom, $ville);
    $newService = $serviceDao->save($newService);

    header('Location: ./DetailService.php?numeroService=' . $newService->getNumeroService());
    exit();
}
