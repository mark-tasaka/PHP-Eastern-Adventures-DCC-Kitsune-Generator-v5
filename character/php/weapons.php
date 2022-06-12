<?php


function getWeapon($input)
{
    $a00 = array("Dagger [Tanto]", "1d4/1d10");
    $a01 = array("Longbow [Daikyu]", "1d6");
    $a02 = array("Longsword [Katana]", "1d8");
    $a03 = array("Shortbow [Hankyu]", "1d6");
    $a04 = array("Short sword [Wakizashi]", "1d6");
    $a05 = array("Staff [bo/jo]", "1d4");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05);
    
    return $array1[$input];
    
}


    function getRandomWeapons()
    {
       
        $weaponsArray = array(0, 1, 2, 3, 4, 5);
    
        //shuffle $weaponsArray
        shuffle($weaponsArray); 
    
        $numberOfWeapons = rand (2, 3);
    
        $weaponsHas = array();
    
        for($j = 0; $j < $numberOfWeapons; ++$j)
        {
            $weapon = $weaponsArray[$j];
            array_push($weaponsHas, $weapon);
        }
    
        return $weaponsHas;
    }


?>