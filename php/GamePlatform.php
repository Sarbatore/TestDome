<?php

function calculateFinalSpeed(float $initialSpeed, array $inclinations): float
{
    $finalSpeed = $initialSpeed;
    
    foreach ($inclinations as $incline) {
        $finalSpeed -= $incline;
        if ($finalSpeed <= 0) {
            return 0;
        }
    }

    return $finalSpeed;
}

echo calculateFinalSpeed(60, [0, 30, 0, -45, 0]);