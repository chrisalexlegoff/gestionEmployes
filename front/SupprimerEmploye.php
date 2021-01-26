<?php

require_once '../dao/EmployeDao.php';

$employeDao = new EmployeDao();

$employeDao->deleteById($_GET['numeroEmploye']);


header('Location: ./ListeEmploye.php');
exit();


