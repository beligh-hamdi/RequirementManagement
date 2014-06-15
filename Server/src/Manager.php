<?php

use Doctrine\Common\Collections\ArrayCollection;

require_once('User.php');

/**
 * @Entity
 */
class Manager extends User{

    /**
    * @OneToMany(targetEntity="Projet", mappedBy="manager")  
    */
    protected  $projets = null;
     
     function __construct() {
         
         parent::__construct();
         $this->projets = new \Doctrine\Common\Collections\ArrayCollection();
     }

     
    public function getProjets() {
        return $this->projets;
    }

    public function setProjets($projets) {
        $this->projets = $projets;
    }


  }
?>