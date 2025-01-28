<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
*/
 class Math{

  static function add(int $a,int $b){
    return $a + $b;
  }

  static function substract(int $a,int $b){
    return $a - $b;
  }

  static function multiply(int $a,int $b){
    return $a * $b;
  }
}

$nombre1 = 5;
$nombre2 = 10;

echo Math::add($nombre1, $nombre2)."</br>"; 
echo Math::substract($nombre1, $nombre2)."</br>";
echo Math::multiply($nombre1, $nombre2)."</br>";