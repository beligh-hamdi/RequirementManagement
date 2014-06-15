<?php


use Doctrine\Common\Collections\ArrayCollection;

require_once('Collaborateur.php');

/**
 * @Entity 
 * @Table(name="requirements")
 */
class Requirement {
 /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
     protected $id;
    
      /**
     * @Column(type="string")
     * @var string
     */
     protected $features;
     
      /**
     * @Column(type="string")
     * @var string
     */
     protected $number;
     
      /**
     * @Column(type="string")
     * @var string
     */
     protected $description;
    
       /**
     * @Column(type="string")
     * @var string
     */
     protected $priority;
     
       /**
     * @Column(type="string")
     * @var string
     */
     protected $level;
     
       /**
     * @Column(type="string")
     * @var string
     */
     protected $dependentDevelopment;
     
       /**
     * @Column(type="string")
     * @var string
     */
     protected $endDesiredDate;
     
      /**
     * @Column(type="string")
     * @var string
     */
     protected $collaborateur;
     
       /**
     * @Column(type="string")
     * @var string
     */
     protected $startDate;
     
       /**
     * @Column(type="string")
     * @var string
     */
     protected $percentageOfIncrease;
     
     /**
     * @ManyToOne(targetEntity="User", inversedBy="exigences")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
     protected $user;
     
     protected  $requirement = null;
             
          function __construct() {
          $this->requirement = new \Doctrine\Common\Collections\ArrayCollection();
     }
     
     public function getUser() {
         return $this->user;
     }

     public function setUser($user) {
         $this->user = $user;
     }

        
     public function getId() {
         return $this->id;
     }

     public function getFeatures() {
         return $this->features;
     }

     public function getNumber() {
         return $this->number;
     }

     public function getDescription() {
         return $this->description;
     }

     public function getPriority() {
         return $this->priority;
     }

     public function getLevel() {
         return $this->level;
     }

     public function getDependentDevelopment() {
         return $this->dependentDevelopment;
     }

     public function getEndDesiredDate() {
         return $this->endDesiredDate;
     }

     public function getCollaborateur() {
         return $this->collaborateur;
     }

     public function getStartDate() {
         return $this->startDate;
     }

     public function getPercentageOfIncrease() {
         return $this->percentageOfIncrease;
     }

     public function setId($id) {
         $this->id = $id;
     }

     public function setFeatures($features) {
         $this->features = $features;
     }

     public function setNumber($number) {
         $this->number = $number;
     }

     public function setDescription($description) {
         $this->description = $description;
     }

     public function setPriority($priority) {
         $this->priority = $priority;
     }

     public function setLevel($level) {
         $this->level = $level;
     }

     public function setDependentDevelopment($dependentDevelopment) {
         $this->dependentDevelopment = $dependentDevelopment;
     }

     public function setEndDesiredDate($endDesiredDate) {
         $this->endDesiredDate = $endDesiredDate;
     }

     public function setCollaborateur($collaborateur) {
         $this->collaborateur = $collaborateur;
     }

     public function setStartDate($startDate) {
         $this->startDate = $startDate;
     }

     public function setPercentageOfIncrease($percentageOfIncrease) {
         $this->percentageOfIncrease = $percentageOfIncrease;
     }



     public function getRequirements() {
         return $this->requirement;
     }

     public function setRequirements($requirement) {
         $this->requirement = $requirement;
     }


}
