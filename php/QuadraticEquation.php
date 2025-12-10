<?php

class QuadraticEquation
{
    public static function findRoots(int $a, int $b, int $c) : array
    {
        // Étape 1 : On calcule ce qu'il y a sous la racine
        $interieur_racine = ($b * $b) - (4 * $a * $c);
        
        // Étape 2 : On calcule la racine carrée
        $racine = sqrt($interieur_racine);
        
        // Étape 3 : On applique la formule deux fois (+ et -)
        // Attention aux parenthèses pour diviser le TOUT par 2a
        $x1 = (-$b + $racine) / (2 * $a);
        $x2 = (-$b - $racine) / (2 * $a);
        
        return [$x1, $x2];
    }
}

// Test
print_r(QuadraticEquation::findRoots(2, 10, 8));