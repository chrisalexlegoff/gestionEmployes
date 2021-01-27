<?php

require_once '../dao/EmployeDao.php';

$employeDao = new EmployeDao();

$employeDao->deleteById($_GET['numeroEmploye']);


header('Location: ../controllers/ListeEmployeController.php');
exit();


