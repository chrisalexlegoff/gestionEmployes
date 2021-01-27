<?php
require_once '../dao/ServiceDao.php';

$serviceDao = new ServiceDao();
var_dump($_POST);
if ($_POST['numeroService'] == "" || $_POST['ville'] == "" || $_POST['nom'] == "") {
    header('Location: ../index.php');
} else {
    $ville = $_POST['ville'];
    $nom = $_POST['nom'];
    $numeroService = $_POST['numeroService'];
    $newService = new Service($numeroService, $nom, $ville);
    $newService = $serviceDao->update($newService);
    var_dump($newService);

    header('Location: ../controllers/DetailServiceController.php?numeroService='.$newService->getNumeroService());
    exit();

}
