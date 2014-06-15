<?php


use Doctrine\Common\Collections\ArrayCollection;

require_once('Manager.php');


/**
 * @Entity 
 */
class Projet {
       /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
     protected $id;
    
      /**
     * @Column(type="string")
     * @var string
     */
     protected  $name;
    
      /**
     * @Column(type="string")
     * @var string
     */
    protected  $level;
    
      /**
     * @Column(type="string")
     * @var string
     */
     protected  $functionality;
      
     /**
     * @ManyToOne(targetEntity="Manager", inversedBy="projets")
     * @JoinColumn(name="manager_id", referencedColumnName="id")
     */
    protected  $manager;
      
      /**
     * @Column(type="string")
     * @var string
     */
    protected  $progress;
    
    function __construct() {
        
    }

    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getFnctionality(){
        return $this->functionality;
    }

    public function getManager() {
        return $this->manager;
    }

    public function getProgress() {
        return $this->progress;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function setFunctionality($functionality) {
        $this->functionality = $functionality;
    }

    public function setManager($manager) {
        $this->manager = $manager;
    }

    public function setProgress($progress) {
        $this->progress = $progress;
    }



}
?>
