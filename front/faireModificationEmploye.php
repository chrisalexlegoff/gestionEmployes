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
$comm = $_POST['comm'];
$noserv = $_POST['noserv'];

$newEmploye = new Employe($numeroEmploye, $nom, $prenom, $emploi, null, $embauche, $sal, $comm, $noserv);
$newEmploye = $employeDao->update($newEmploye);
var_dump($newEmploye);

header('Location: ./DetailEmploye.php?numeroEmploye='.$newEmploye->getNumeroEmploye());
exit();


