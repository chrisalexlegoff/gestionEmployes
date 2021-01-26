<?php

require_once '../dao/ServiceDao.php';

$employeDao = new EmployeDao();

$serviceDao->deleteById($_GET['numeroEmploye']);


header('Location: ./ListeEmploye.php');
exit();


