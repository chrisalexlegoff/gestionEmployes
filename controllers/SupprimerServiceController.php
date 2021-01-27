<?php

require_once '../services/ServiceService.php';

$serviceService = new ServiceService();
$serviceService->supprimerService($_GET['numeroService']);

header('Location: ../controllers/ListeServiceController.php');

exit();


