<?php

use Doctrine\Common\Collections\ArrayCollection;

require_once('User.php');

/**
 * @Entity
 */
class Manager extends User{

    /**
    * @OneToMany(targetEntity="Project", mappedBy="manager")  
    */
    protected  $projects = null;
     
    function __construct() {
         
         parent::__construct();
         $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    public function getProjects() {
        return $this->projects;
    }

    public function setProjets($projects) {
        $this->projets = $projects;
    }
  public function addManagerProject($project)
    {
        $this->projects[] = $project;
    }

  }
?>