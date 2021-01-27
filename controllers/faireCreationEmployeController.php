<?php

require_once '../dao/EmployeDao.php';
$employeDao = new EmployeDao();

if ($_POST['nom'] == "" || $_POST['prenom'] == "" || $_POST['emploi'] == "" || $_POST['embauche'] == "" || $_POST['sal'] == "" || $_POST['noserv'] == "") {
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
    
 
    $newEmploye = new Employe(null, $nom, $prenom, $emploi, null, $embauche, $sal, $comm, null);
    if ($_POST['sup'] != '') {
        $superieur = new Employe ($_POST['sup']);
        $newEmploye->setSuperieur($superieur);
        $newEmploye->getSuperieur()->getNumeroEmploye();
    } 
    if ($_POST['noserv'] != '') {
        $monService = new Service($_POST['noserv']);
        $newEmploye->setService($monService);
    } 
    $newEmploye = $employeDao->save($newEmploye);
    var_dump($newEmploye);

    header('Location: ../front/DetailEmploye.php?numeroEmploye=' . $newEmploye->getNumeroEmploye());
    exit();
}
