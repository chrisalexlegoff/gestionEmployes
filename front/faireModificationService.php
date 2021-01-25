<?php
require_once 'ServiceDao.php';

$serviceDao = new ServiceDao();

if (!isset($_POST['numeroService']) || !isset($_POST['ville']) || !isset($_POST['nom'])) {
    //une redirect
}



$ville = $_POST['ville'];
$nom = $_POST['nom'];
$numeroService = $_POST['numeroService'];
$newService = new Service($numeroService, $nom, $ville);
var_dump($newService);
$newService = $serviceDao->update($newService,$conn);
var_dump($newService);


header('Location: ./DetailService.php?numeroService='.$newService->getNumeroService());
exit();
