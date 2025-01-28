<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

 class Math{
    public static function add(float $number1,float $number2 ): float
    {
        return $number1 + $number2;
    }
    public static function subtract(float $number1,float $number2 ): float
    {
        return $number1 - $number2;
    }
    public static function multiply(float $number1,float $number2 ): float
    {
        return $number1 * $number2;
    }
 }

 echo "Add1 = ".Math::add(15.5,30.64)."\n";
 echo "Substract1 = ".Math::subtract(15.5,30.64)."\n";
 echo "Multiply1 = ".Math::multiply(15.5,30.64)."\n";
