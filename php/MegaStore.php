<?php

enum DiscountType 
{
    case Standard;
    case Seasonal;
    case Weight;
}

function getDiscountedPrice(float $cartWeight, float $totalPrice, DiscountType $discountType): float
{
    $discountModifier = 1.0;

    switch ($discountType) {
        case DiscountType::Standard:
            $discountModifier = 0.94;
            break;
        case DiscountType::Seasonal:
            $discountModifier = 0.88;
            break;
        case DiscountType::Weight:
            if ($cartWeight <= 10) {
                $discountModifier = 0.94;
            } else {
                $discountModifier = 0.82;
            }
            break;
    }

    $discountedPrice = $totalPrice * $discountModifier;
    
    return $discountedPrice;
}

echo getDiscountedPrice(12, 100, DiscountType::Weight);