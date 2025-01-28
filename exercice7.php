<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount{

  public function __construct(protected float $balance){}

  public function deposit(float $amount){
    $newBalanceAfterDeposit = $this->balance + $amount;
    echo "Your balance is : ".$newBalanceAfterDeposit."</br>";
  }

  public function withdraw(float $amount){
    if($this->balance >= $amount){
      $newBalanceAfterWithdraw = $this->balance - $amount;
      echo "Your balance is : ".$newBalanceAfterWithdraw."</br>";
    }
    else{
      echo "Amount is too big for withdraw";
    }
  }
}

$account1 = new BankAccount(250);
$account1->deposit(50);
$account1->withdraw(100);