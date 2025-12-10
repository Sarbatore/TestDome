<?php

class IceCreamMachine
{
    public static function makeIceCreams(array $flavors, array $toppings) : array
    {
        $combinations = [];
        foreach ($flavors as $flavor) {
            foreach ($toppings as $topping) {
                $combinations[] = [$flavor, $topping];
            }
        }
        
        return $combinations;
    }
}

// Example usage:
$flavors = ['Vanille', 'Chocolat'];
$toppings = ['Pépites', 'Coulis'];
// Returns:
var_dump(IceCreamMachine::makeIceCreams($flavors, $toppings));