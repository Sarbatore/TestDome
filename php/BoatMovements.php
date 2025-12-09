<?php

/**
 * @return boolean The destination is reachable or not
 */
function canTravelTo(array $gameMatrix, int $fromRow, int $fromColumn, 
                     int $toRow, int $toColumn) : bool
{
    $res = false;
    
    return $res;
}

$gameMatrix = [
    [false, true,  true,  false, false, false],
    [true,  true,  true,  false, false, false],
    [true,  true,  true,  true,  true,  true],
    [false, true,  true,  false, true,  true],
    [false, true,  true,  true,  false, true],
    [false, false, false, false, false, false],
  ];
  

echo canTravelTo($gameMatrix, 3, 2, 2, 2) ? "true\n" : "false\n"; // true, Valid move
echo canTravelTo($gameMatrix, 3, 2, 3, 4) ? "true\n" : "false\n"; // false, Can't travel through land
echo canTravelTo($gameMatrix, 3, 2, 6, 2) ? "true\n" : "false\n"; // false, Out of bounds