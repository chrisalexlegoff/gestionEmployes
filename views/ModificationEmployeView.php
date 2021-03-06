<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
    <link href="../css/form-validation.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>

    <h1 class="form-h1">Modification d'un employé</h1>
    <div class="form-group-div">
    <form method="POST" action="../controllers/faireModificationEmployeController.php">

        <?php
        echo '<input class="form-control" type="hidden" placeholder="Nom du employe" name ="numeroEmploye" value="' . $employe->getNumeroEmploye() . '">  <br>';
        echo '<input class="form-control" type="text" placeholder="Nom de l\'employe" name ="nom" value="' . $employe->getNom() . '">  <br>';
        echo '<input class="form-control" type="text" placeholder="prenom de l\'employe" name ="prenom" value="' . $employe->getPrenom() . '">  <br>';
        echo '<label class="form-control" for="emploi">Choisissez un emploi:</label> <br>';
        echo '<select name="emploi">
            <option value="' . $employe->getEmploi() . '">' . $employe->getEmploi() . '</option>
            <option value="president">Président</option>
            <option value="directeur">Directeur</option>
            <option value="programmeur">Programmeur</option>
            <option value="vendeur">vendeur</option>
            <option value="pupitreur">Pupitreur</option>
            <option value="technicien">Technicien</option>
            <option value="comptable">Comptable</option>
            <option value="analyste">Analyste</option>
            <option value="secretaire">Secrétaire</option>
            <option value="balayeur">Balayeur</option>
        </select> <br>';
        echo '<input class="form-control" type="number" placeholder="Salaire" name="sup" value="' . $_GET['sup'] . '"> <br>';
        echo '<input class="form-control" type="date" placeholder="date d\'embauche" name="embauche" value="' . $employe->getDateEmbauche() . '"> <br>';
        echo '<input class="form-control" type="number" step=0.01 placeholder="Salaire" name="sal" value="' . $employe->getSalaire() . '"> <br>';
        echo '<input class="form-control" type="number" step=0.01 placeholder="Commission" name="comm" value="' . $employe->getCommission(). '"> <br>';
        echo '<select class="form-control" name="noserv" placeholder="Numéro service">
            <option value="' . $employe->getService()->getNumeroService() . '">' . $employe->getService()->getNumeroService() . '</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select> <br>';
        ?>
        <button class="btn btn-primary">Valider</button>


    </form>
</div>
</html>



</html>