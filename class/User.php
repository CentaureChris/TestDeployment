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

    
    public function isValid(User $user)
    {
        if(isset($user->nom) && isset($user->prenom) && isset($user->email) && isset($user->age))
        {
            return true;
        }
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }
}