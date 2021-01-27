<?php
require_once '../dao/EmployeDao.php';

$employeDao = new EmployeDao();

if (!isset($_POST['numeroEmploye']) || !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['emploi']) || !isset($_POST['embauche']) || !isset($_POST['sal']) || !isset($_POST['comm']) || !isset($_POST['noserv'])) {
    //une redirect
}
$numeroEmploye = $_POST['numeroEmploye'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$emploi = $_POST['emploi'];
$embauche = $_POST['embauche'];
$sal = $_POST['sal'];
if ($_POST['comm'] != '') {
    $comm = $_POST['comm'];
} else {
    $comm = null;
}

$newEmploye = new Employe($numeroEmploye, $nom, $prenom, $emploi, null, $embauche, $sal, $comm, null);
if ($_POST['sup'] != '') {
    $superieur = new Employe ($_POST['sup']);
    $newEmploye->setSuperieur($superieur);
    $newEmploye->getSuperieur()->getNumeroEmploye();
} 
if ($_POST['noserv'] != '') {
    $monService = new Service($_POST['noserv']);
    $newEmploye->setService($monService);
} 

$newEmploye = $employeDao->update($newEmploye);


header('Location: ../controllers/DetailEmployeController.php?numeroEmploye='.$newEmploye->getNumeroEmploye()."&sup=".$newEmploye->getSuperieur()->getNumeroEmploye());
exit();


