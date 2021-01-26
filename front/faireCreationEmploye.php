<?php

require_once '../dao/EmployeDao.php';
$employeDao = new EmployeDao();
// var_dump($_POST);
if ($_POST['nom'] == "" || $_POST['prenom'] == "" || $_POST['emploi'] == "" || $_POST['embauche'] == "" || $_POST['sal'] == "" || $_POST['noserv'] == "") {
    // if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['emploi']) || !isset($_POST['embauche']) || !isset($_POST['sal']) || !isset($_POST['comm']) || !isset($_POST['noserv'])) {
    header('Location: ../index.php');
} else {
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

    $noserv = $_POST['noserv'];

    $newEmploye = new Employe(null, $nom, $prenom, $emploi, null, $embauche, $sal, $comm, $noserv);
    $newEmploye = $employeDao->save($newEmploye);
    var_dump($newEmploye);

    header('Location: ./DetailEmploye.php?numeroEmploye=' . $newEmploye->getNumeroEmploye());
    exit();
}
