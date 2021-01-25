<html>
<?php
require_once 'ServiceDao.php';

$serviceDao = new ServiceDao(); 
$service = $serviceDao->getById($_GET['numeroService']);
?>
<head></head>
</body>
<h1>Creation d'un nouveau service</h1>
<form method="POST" action="./faireModificationService.php">

<?php
   echo '<p>id : '.$service->getNumeroService().'</p>';
   echo '<input type="hidden" placeholder="Nom du service" name ="numeroService" value="'.$service->getNumeroService().'">  <br>';
    echo '<input type="text" placeholder="Nom du service" name ="nom" value="'.$service->getNom().'">  <br>';
    echo '<input type="text" placeholder="Ville" name ="ville" value="'.$service->getVille().'">  <br>';
?>    
    <button>Valider</button>


</form>

</html>



</html>