<?php
require_once '../dao/ServiceDao.php';

$serviceDao = new ServiceDao();
var_dump($_POST);
if (!isset($_POST['numeroService']) || !isset($_POST['ville']) || !isset($_POST['nom'])) {
    //une redirect
}

$ville = $_POST['ville'];
$nom = $_POST['nom'];
$numeroService = $_POST['numeroService'];
$newService = new Service($numeroService, $nom, $ville);
$newService = $serviceDao->update($newService);


// header('Location: ./DetailService.php?numeroService='.$newService->getNumeroService());
// exit();
