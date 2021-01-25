<?php

require_once 'ServiceDao.php';
$serviceDao = new ServiceDao();

if (!isset($_POST['ville']) || !isset($_POST['nom'])) {
    //une redirect
}


$ville = $_POST['ville'];
$nom = $_POST['nom'];

$newService = new Service(null, $nom, $ville);
var_dump($newService);
$newService = $serviceDao->save($newService);
var_dump($newService);


header('Location: ./DetailService.php?numeroService='.$newService->getNumeroService());
exit();






