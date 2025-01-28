<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/
require_once "exercice2.php";

class Student extends Person{
  protected $grades = [];

  public function __construct($grades, $first_name, $last_name, $age)
  {
    $this->grades = $grades;
    parent::__construct($first_name, $last_name, $age);
  }
  
  public function getAverage()
  {
    if (count($this->grades) > 0) {
      echo "The average is : ".array_sum($this->grades) / count($this->grades);
    } 
  }

  /**
   * Get the value of grades
   */
  public function getGrades()
  {
    return $this->grades;
  }

  /**
   * Set the value of grades
   */
  public function setGrades($grades): self
  {
    $this->grades = $grades;
    return $this;
  }
}

$student1 = new Student([12, 5, 10], "Pierre", "Pierrafeu", 20);
$student1->getAverage();