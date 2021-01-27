<?php
require_once '../dao/EmployeDao.php';

$employeDao = new EmployeDao();
$employe = $employeDao->getById($_GET['numeroEmploye']);

require '../views/ModificationEmployeView.php';

?>
