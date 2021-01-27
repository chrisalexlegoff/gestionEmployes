<?php

require_once '../dao/ServiceDao.php';
require_once '../dao/EmployeDao.php';

class ServiceService{
    
    private ?ServiceDao $serviceDao;
    private ?EmployeDao $employeDao;

    public function __construct(?ServiceDao $serviceDao=null,?EmployeDao $employeDao=null)
    {
       
        $this->serviceDao = $serviceDao;
        if($serviceDao == null)
            $this->serviceDao = new ServiceDao();
        
        $this->employeDao = $employeDao;
        if($employeDao == null)
            $this->employeDao = new EmployeDao();
      
    }

    public function supprimerService(?int $numeroService) : void
    {
        $this->employeDao->mettreANullEmployesParServcice($numeroService);
        $this->serviceDao->deleteById($numeroService);
    }


} 