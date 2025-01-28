<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
*/

class Movie{

  public function __construct(protected string $title, protected string $genre, protected int $ageRestriction){}

  public function canWatch($viewerAge){
    if ($viewerAge >= $this->ageRestriction){
      return true;
    }
    else{
      return false;
    }
  }
}

$movie1 = new Movie("titre 1", "Romance", 12);
$movie1->canWatch(10);