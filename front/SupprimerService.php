<?php

require_once '../dao/ServiceDao.php';

$serviceDao = new ServiceDao();

$serviceDao->deleteById($_GET['numeroService']);


header('Location: ../controllers/ListeServiceController.php');

exit();


