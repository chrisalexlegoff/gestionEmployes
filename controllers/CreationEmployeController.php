<?php

require_once '../dao/EmployeDao.php';
require_once '../dao/ServiceDao.php';

$serviceDao = new serviceDAO();
$employeDao = new EmployeDao();
$employes = $employeDao->getAll();
$services = $serviceDao->getAll();

require "../views/CreationEmployeView.php";

?>

