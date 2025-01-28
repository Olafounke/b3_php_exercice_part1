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



 class ShoppingCart {
     
 
     public function __construct(
        protected array $items, 
       
     )
     {
     }
 
     public function addItems(string $name, float $price): void {
         $this->items[] = ['name' => $name, 'price' => $price];
     }
 
     public function displayItems(): void {
         if (empty($this->items)) {
             echo "Panier vide.";
         } else {
             foreach ($this->items as $item) {
                 echo "{$item['name']} - {$item['price']} euros";
             }
         }
     }
 
     public function calculateTotal(): float {
         $total = 0;
         foreach ($this->items as $item) {
             $total += $item['price'];
         }
         return $total;
     }
 }
 

 $cart1 = new ShoppingCart(["acajou", 30]);
 
 $cart1->addItems("Riz", 49.90) .". "; 
 $cart1->displayItems();
 echo "Coût total : " . $cart->calculateTotal() . " euros. ";
 