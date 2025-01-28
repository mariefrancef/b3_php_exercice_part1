<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

 class Person{

  public function __construct(protected string $first_name, protected string $last_name, protected int $age){}

  /**
   * Get the value of first_name
  */
  public function getFirstName(): string
  {
    return $this->first_name;
  }

  /**
   * Set the value of first_name
  */
  public function setFirstName(string $first_name): self
  {
    $this->first_name = $first_name;
    return $this;
  }

  public function afficheInfos(){
    echo $this->first_name." ".$this->last_name.", ".$this->age." years"."</br>";
  }
}

$person1 = new Person("Rose", "Smith", 30);
$person1->afficheInfos();