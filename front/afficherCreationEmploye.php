<html>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
    <link href="../css/form-validation.css" rel="stylesheet">
</head>

<body>
    <?php require '../front/navbar.php' ?>
    <h1 class="form-h1">Creation d'un nouvel employé</h1>
    <div class="form-group-div">
        <form method="POST" action="./faireCreationEmploye.php">
            <input type="text" class="form-control" placeholder="Nom de l'employé" name="nom"> <br>
            <input type="text" class="form-control" placeholder="Prénom de l'employé" name="prenom"> <br>
            <select name="emploi" class="form-control" placeholder="Emploi souhaité">
                <option value=""></option>
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
            </select> <br>
            <input type="number" class="form-control" placeholder="numéro supérieur" name="sup"> <br>
            <input type="date" class="form-control" placeholder="date d'embauche" name="embauche"> <br>
            <input type="number" step=0.01 class="form-control" placeholder="Salaire" name="sal"> <br>
            <input type="number" step=0.01 class="form-control" placeholder="Commission" name="comm"> <br>
            <select name="noserv" class="form-control" placeholder="Numéro service">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br>

            <button class="btn btn-primary">Valider</button>
        </form>
    </div>

</html>



</html>