<?php

require_once '../dao/EmployeDao.php';
require_once '../dao/ServiceDao.php';

$employeDao = new EmployeDao();
$serviceDao = new serviceDao();
$employe = $employeDao->getById($_GET['numeroEmploye']);
$monService = $serviceDao->getById($employe->getService()->getNumeroService());
$employe->setService($monService);
//$service = $serviceDao->getById($employe->getNumeroEmploye());

require '../views/DetailEmployeView.php';

?>
