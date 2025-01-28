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
    protected float $salary,
    protected string $position,
    string $firstName, 
    string $lastName, 
    int $age
){
    parent::__construct($firstName,$lastName,$age); 
}

public function afficheInfos(): string|int
{
    
//return  $this->salary." ".$this->position." ".$this->firstName." ".$this->lastName;
return parent::afficheInfos()." - ".$this->getPosition()." avec pour salaire ".$this->getsalary();
}

    /**
     * Get the value of salary
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
}

$employee1 = new Employee(1400.30,"Alternant Dev", "Jonas","ANDRE", 21);
echo $employee1->afficheInfos();