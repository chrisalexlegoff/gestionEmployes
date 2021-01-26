<?php

require_once '../dao/ServiceDao.php';
$serviceDao = new ServiceDao();
$services = $serviceDao->getAll();

require("../views/ListeServiceView.php");

?>
