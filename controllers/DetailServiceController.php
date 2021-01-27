<?php

require_once '../dao/ServiceDao.php';

$serviceDao = new ServiceDao();

$service = $serviceDao->getById($_GET['numeroService']);

require '../views/DetailServiceView.php';
?>
