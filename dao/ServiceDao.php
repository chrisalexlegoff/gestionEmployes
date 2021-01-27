<?php
require_once '../dto/Service.php';
require_once '../services/ConnexionSingleton.php';

class ServiceDao
{
    private ?PDO $connexion = null;

    public function __construct(?PDO $connexion=null)
    {
        if($this->connexion==null){
            $this->connexion = ConnexionSingleton::getConnexion();
        }else{
            $this->connexion = $connexion;
        }

    }

    public function update(Service $newService) : Service
    {
        $sql = "UPDATE serv 
                set noserv=:numeroServiceParam,
                    service=:nomParam, 
                    ville=:villeParam 
                where noserv = :numeroServiceParam";
        $preparedQuery = $this->connexion->prepare($sql);
        $numeroService = $newService->getNumeroService();
        $nom = $newService->getNom();
        $ville = $newService->getVille();
        $preparedQuery->bindParam(':numeroServiceParam', $numeroService);
        $preparedQuery->bindParam(':nomParam', $nom);
        $preparedQuery->bindParam(':villeParam', $ville);
        $preparedQuery->execute();

        return  $newService;
    }

    public function getById(?int $numeroService): ?Service
    {
        $sql =  "select * from serv as e where e.noserv=$numeroService";
        $row = $this->connexion->query($sql)->fetch(PDO::FETCH_ASSOC);
        if(!$row)
            return null;
        $serviceEnCours = new Service($row['noserv'], $row['service'], $row['ville']);
        return  $serviceEnCours;
    }

    public function getAll(): array
    {
        $sql =  "select * from serv as e";
        $resultset = $this->connexion->query($sql);
        $resultats = [];
        while ($row = $resultset->fetch(PDO::FETCH_ASSOC)) {
            // $serviceEnCours = new Service($row['noserv'], $row['service'], $row['ville']);
            $serviceEnCours = new Service();
            $serviceEnCours->setNom($row['service']);
            $serviceEnCours->setNumeroService($row['noserv']);
            $serviceEnCours->setVille($row['ville']);
            $resultats[] = $serviceEnCours;
        }
        return $resultats;
    }

    public function deleteById(?int $numeroService)
    {
        $sql =  "delete from serv as e where e.noserv=:numeroServiceParam";
        $preparedQuery = $this->connexion->prepare($sql);
        $preparedQuery->bindParam(':numeroServiceParam', $numeroService);
        $preparedQuery->execute();
    }


    function save(Service $newService) : Service
    {
        //1er étape : récuperer un id à partir de la sequence seq_serv
        $sql = "select nextval('seq_serv') as next_id;";
        $preparedQuery = $this->connexion->prepare($sql);
        $preparedQuery->execute();
        $row = $preparedQuery->fetch();
        var_dump($row);
        $nextId = $row['next_id'];
    
        //2éme étape : mettre à jour le numero du service dans l'objet service 
        $newService->setNumeroService($nextId);
    
        //3eme étape : persister l'objet service en BDD
        $sql = "INSERT INTO serv (noserv,service, ville) VALUES(:numeroServiceParam,:nomParam, :villeParam)";
        $preparedQuery = $this->connexion->prepare($sql);
    
        $nom = $newService->getNom();
        $ville = $newService->getVille();
        $preparedQuery->bindParam(':numeroServiceParam',$nextId);
        $preparedQuery->bindParam(':nomParam', $nom);
        $preparedQuery->bindParam(':villeParam', $ville);
        $preparedQuery->execute();
    
        return  $newService;
    }
    /**
     * Get the value of connexion
     *
     * @return  PDO
     */
    public function getConnexion() : PDO
    {
        return $this->connexion;
    }

    /**
     * Set the value of connexion
     *
     * @param   PDO  $connexion  
     *
     * @return  self
     */
    public function setConnexion(PDO $connexion) 
    {
        $this->connexion = $connexion;
    }
}
