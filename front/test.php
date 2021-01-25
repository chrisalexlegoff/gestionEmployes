<?php

require_once 'connexion.php';
require_once 'Service.php';
require_once 'Utilisateur.php';

function getById(string $login, string $mdp, $conn): ?Utilisateur
{
    //$mdp = str_replace("'","''",$mdp);
    $sql =  "select * from utilisateur as u where u.mdp=md5(:pwd) and lower(u.mail)=lower(:login) ";
    
    $preparedQuery = $conn->prepare($sql);
    $preparedQuery->bindParam(':pwd', $mdp);
    $preparedQuery->bindParam(':login', $login);   
    $preparedQuery->execute();
    //$params = array(':pwd' => $mdp, ':login' => $login);
    //$preparedQuery->execute($params);
    $row = $preparedQuery->fetch();



    if ($row == null || $row == false)
        return null;
    $serviceEnCours = new Utilisateur($row['id'], $row['nom'], $row['prenom'], $row['mail']);
    return  $serviceEnCours;
}


/*function getById(string $login, string $mdp, $conn): ?Utilisateur
{
    //$mdp = str_replace("'","''",$mdp);
    $sql =  "select * from utilisateur as u where u.mdp=md5(?) and lower(u.mail)=lower(?) ";
    
    $preparedQuery = $conn->prepare($sql);
    $preparedQuery->execute(array($mdp,$login));
    $row = $preparedQuery->fetch();

    if ($row == null || $row == false)
        return null;
    $serviceEnCours = new Utilisateur($row['id'], $row['nom'], $row['prenom'], $row['mail']);
    return  $serviceEnCours;
}
*/
if (!isset($_GET['login']) || !isset($_GET['mdp'])) {
    echo "<h1> login/mdp invalide </h1>";
} else {

    $login = $_GET['login'];
    $mdp = $_GET['mdp'];

    $utilisateur = getById($login, $mdp, $conn);
?>
    <html>

    <head>
        <title>utilisateur</title>
    </head>

    <body>

        <?php
        if ($utilisateur == null) {
            echo "<h1>Pas de résultats pour $login </h1>";
        } else {
            echo "<h1>Detail de l'utilisateur  " . $utilisateur->getNom() . " - " . $utilisateur->getPrenom() . " : </h1>";
        ?>
            <ul>
                <?php
                echo "<li>id : " . $utilisateur->getId() . " </li>";
                echo "<li>Nom: " . $utilisateur->getNom() . "</li>";
                echo "<li>Prenom: " . $utilisateur->getPrenom() . "</li>";
                echo "<li>Mail: " . $utilisateur->getMail() . "</li>";
                ?>
            </ul>
        <?php
        }
        ?>
    </body>

    </html>
<?php
}
?>