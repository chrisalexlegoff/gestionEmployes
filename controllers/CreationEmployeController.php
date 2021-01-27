<?php

require_once '../dao/EmployeDao.php';

$employeDao = new EmployeDao();
$employes = $employeDao->getall();

require "../views/CreationEmployeView.php";

?>

