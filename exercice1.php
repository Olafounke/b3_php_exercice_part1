<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product {

    public function __construct(
        protected string $name,
        protected float $priceWithoutTax,
        protected float $vatRate,
    ) {}

    public function getPriceWithVat(): float {
        // Calcul du prix TTC
        return $this->priceWithoutTax + ($this->priceWithoutTax * $this->vatRate / 100);
    }
            /**
             * Get the value of name
             */
            public function getName(): string
            {
                        return $this->name;
            }

            /**
             * Set the value of name
             */
            public function setName(string $name): self
            {
                        $this->name = $name;

                        return $this;
            }

            /**
             * Get the value of priceWithoutTax
             */
            public function getPriceWithoutTax(): float
            {
                        return $this->priceWithoutTax;
            }

            /**
             * Set the value of priceWithoutTax
             */
            public function setPriceWithoutTax(float $priceWithoutTax): self
            {
                        $this->priceWithoutTax = $priceWithoutTax;

                        return $this;
            }

            /**
             * Get the value of vatRate
             */
            public function getVatRate(): float
            {
                        return $this->vatRate;
            }

            /**
             * Set the value of vatRate
             */
            public function setVatRate(float $vatRate): self
            {
                        $this->vatRate = $vatRate;

                        return $this;
            }
}

$product1 = new Product("Acajou", 30, 10);
echo "Le prix TTC de " . $product1->getName() . " est " . $product1->getPriceWithVat() . " euros.";