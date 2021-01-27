<?php

require_once '../service/ServiceService.php';

$serviceService = new ServiceService();

$serviceService->supprimerService($_GET['numeroService']);


header('Location: ../controllers/ListeServiceController.php');

exit();


