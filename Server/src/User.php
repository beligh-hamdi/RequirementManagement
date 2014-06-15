<?php

use Doctrine\Common\Collections\ArrayCollection;

require_once('Exigence.php');

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="profile", type="string")
 * @DiscriminatorMap({"user" = "User", "manager" = "Manager", "collaborateur" = "Collaborateur"})
 */
class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    
     /**
     * @Column(type="string")
     * @var string
     */
    protected $firstname;

      /**
     * @Column(type="string")
     * @var string
     */
     protected  $email;
     
     /**
     * @Column(type="string")
     * @var string
     */
    protected  $date_of_hire;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected  $contact;
    
  
      /**
     * @oneToMany(targetEntity="Exigence", mappedBy="user")
     * @var Exigence[]
     */
     protected  $exigences = null;
     
     public function __construct()
    {
            $this->exigences = new ArrayCollection();
    }
  
    
public function getId() {
return $this->id;
}

public function getName() {
return $this->name;
}

public function getFirstname() {
return $this->firstname;
}

public function setId($id) {
$this->id = $id;
}

public function setName($name) {
$this->name = $name;
}

public function setFirstname($firstname) {
$this->firstname = $firstname;
}

public function getEmail() {
    return $this->email;
}

public function getDate_of_hire() {
    return $this->date_of_hire;
}

public function getExigences() {
    return $this->exigences;
}

public function getContact() {
    return $this->contact;
}

public function setEmail($email) {
    $this->email = $email;
}

public function setDate_of_hire($date_of_hire) {
    $this->date_of_hire = $date_of_hire;
}

public function setExigences(Exigence $exigences) {
    $this->exigences = $exigences;
}

public function setContact($contact) {
    $this->contact = $contact;
}

}

