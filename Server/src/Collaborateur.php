<?php
use Doctrine\Common\Collections\ArrayCollection;

require_once('User.php');

/**
 * @Entity
 */
class Collaborateur extends User {
        
    /**
    * @Column(type="string")
    * @var string
    */
     protected  $supervisor;
    
    function __construct() {
        parent::__construct();
    }
       
    public function getSupervisor() {
        return $this->supervisor;
    }

      
    public function setSupervisor($supervisor) {
        $this->supervisor = $supervisor;
        return $this;
    }

   
 }
