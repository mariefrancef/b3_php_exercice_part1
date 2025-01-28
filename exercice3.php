<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
*/
require_once "exercice2.php";

class Employee extends Person{

  public function __construct(
    protected string $salary, 
    protected string $position,
    string $first_name,
    string $last_name,
    int $age
    )
  {
    parent::__construct($first_name, $last_name, $age);
  }

  public function afficheInfos(){
    echo $this->first_name." ".$this->last_name.", ".$this->age." years, and the salary is ".$this->salary." €, in the position of ".$this->position."</br>";
  }
}

$employe1 = new Employee(2000, "developer", "Jane", "Smith", 32);
$employe1->afficheInfos();