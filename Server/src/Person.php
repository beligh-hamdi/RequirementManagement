<?php

/**
 * @Entity
 * @Table(name="persons")
 */
class Person
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    private $id;
    
    /** @Column(length=50) */
    private $name; // type defaults to string
   
    
    public function getName() {
        return $this->name;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
}

