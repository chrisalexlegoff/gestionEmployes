<?php

require_once '../dao/ServiceDao.php';
$serviceDao = new ServiceDao();

if (!isset($_POST['ville']) || !isset($_POST['nom'])) {
    //une redirect
}

$ville = $_POST['ville'];
$nom = $_POST['nom'];

$newService = new Service(null, $nom, $ville);
$newService = $serviceDao->save($newService);

header('Location: ./DetailService.php?numeroService='.$newService->getNumeroService());
exit();






