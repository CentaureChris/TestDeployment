<?php

namespace App;


class User 
{
    private $email;
    private $nom;
    private$prenom;
    private $age;

    public function __construct($nom,$prenom,$email,$age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->age = $age;
    }

    
    public function isValid()
    {
        if(isset($this->nom) && isset($this->prenom) && isset($this->email) && isset($this->age))
        {
            if(filter_var($this->getEmail(),FILTER_VALIDATE_EMAIL)){
                return true;
            }else{
                return false;
            }
        }
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }
}