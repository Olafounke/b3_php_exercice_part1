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
class Student extends Person {
    protected array $grades = []; 

    public function addGrade(float $grade): self
    {
        $this->grades[] = $grade;
        return $this;
    }

    /**
     * Get all grades
     */
    public function getGrades(): array
    {
        return $this->grades;
    }

    /**
     * Set grades (remplacer les notes existantes)
     */
    public function setGrades(array $grades): self
    {
        $this->grades = $grades;
        return $this;
    }

    public function getAverage(): float
    {
        if (empty($this->grades)) {
            return 0; 
        }
        return array_sum($this->grades) / count($this->grades);
    }
}

$student1 = new Student("Rose", "ANDRE", 21);

// Ajout de notes
$student1->addGrade(15.5)->addGrade(18)->addGrade(14)->addGrade(16);

echo "Nom : " . $student->getName() . "\n";
echo "Âge : " . $student->getAge() . "\n";
echo "Notes : " . implode(", ", $student->getGrades()) . "\n";
echo "Moyenne : " . $student->getAverage() . "\n";

?>
