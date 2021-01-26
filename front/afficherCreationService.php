<html>


<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>
<body>
<?php require '../front/navbar.php' ?>
<h1>Creation d'un nouveau service</h1>
<form method="POST" action="./faireCreationService.php">
    <input type="text" placeholder="Nom du service" name ="nom">  <br>
    <input type="text" placeholder="Ville" name ="ville">  <br>
    <button>Valider</button>
</form>

</html>



</html>