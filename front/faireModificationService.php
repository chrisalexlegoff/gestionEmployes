<?php
require_once '../dao/ServiceDao.php';

$serviceDao = new ServiceDao();

if (!isset($_POST['numeroService']) || !isset($_POST['ville']) || !isset($_POST['nom'])) {
    //une redirect
}



$ville = $_POST['ville'];
$nom = $_POST['nom'];
$numeroService = $_POST['numeroService'];
$newService = new Service($numeroService, $nom, $ville);
$newService = $serviceDao->update($newService,$conn);


header('Location: ./DetailService.php?numeroService='.$newService->getNumeroService());
exit();
