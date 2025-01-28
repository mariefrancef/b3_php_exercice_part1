<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
*/

class ShoppingCart
{
  public $items = [];
  public $total = 0;


  public function addItem($name, $price)
  {
    $this->items[] = ['name' => $name, 'price' => $price];
  }

  public function displayItems()
  {
    foreach ($this->items as $item) {
      echo "Name : {$item['name']}, price : {$item['price']}€"."</br>";
    }
  }

  public function calculateTotal()
  {
    $this->total = 0;
    foreach ($this->items as $item) {
      $this->total = $this->total + $item['price'];
    }
    return $this->total;
  }
}

$cart1 = new ShoppingCart();

$cart1->addItem("Book", 15);
$cart1->addItem("Pensil", 2);
$cart1->addItem("Paper", 5);


echo "Articles in the cart : ".$cart1->displayItems();
echo "Total price : " . $cart1->calculateTotal() . "€"."</br>";
