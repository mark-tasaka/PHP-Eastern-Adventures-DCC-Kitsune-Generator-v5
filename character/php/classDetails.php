<?php

/*Kitsune */

function getHitPoints($level, $staminaMod)
{
    $baseHP = rand(1, 4);
    $baseHP += $staminaMod;
    
    if($baseHP < 1)
    {
        $baseHP = 1;
    }

    $hitPoints = $baseHP;

    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(3, 6);
        $levelHP += $staminaMod;

        if($levelHP < 3)
        {
            $levelHP = 3;
        }

        $hitPoints += $levelHP ;

    }

    return $hitPoints;

}


function savingThrowReflex($level)
{
    $reflex = 0;

    if($level >= 1 && $level <= 3)
    {
        $reflex = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level >= 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    $fort = 0;

    if($level >= 1 && $level <= 3)
    {
        $fort = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $fort = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $fort = 3;
    }

    if($level >= 10)
    {
        $fort = 4;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 0;
    
    if($level >= 1 && $level <= 2)
    {
        $will = 1;
    }
    
    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }
    
    if($level == 5)
    {
        $will = 3;
    }
    
    if($level >= 6 && $level <= 7)
    {
        $will = 4;
    }
    
    if($level >= 8 && $level <= 9)
    {
        $will = 5;
    }
    
    if($level >= 10)
    {
        $will = 6;
    }
    
    return $will;

}

function criticalDie($level)
{
    $critical = "";

    if($level == 1)
    {
        $critical = "1d6/II";
    }

    if($level == 2 || $level == 3)
    {
        $critical = "1d8/II";
    }

    if($level == 4 || $level == 5)
    {
        $critical = "1d10/II";
    }

    if($level == 6 || $level == 7)
    {
        $critical = "1d12/II";
    }
    
    if($level == 8 || $level == 9)
    {
        $critical = "1d14/II";
    }
    
    if($level == 10)
    {
        $critical = "1d16/II";
    }

    return $critical;

}

function attackBonus($level)
{
    $attackBonus = 1;
    
    if($level >= 3 && $level <= 4)
    {
        $attackBonus = 2;
    }

    if($level == 5 || $level == 6)
    {
        $attackBonus = 3;
    }

    if($level == 7 || $level == 8)
    {
        $attackBonus = 4;
    }

    if($level == 9 || $level == 10)
    {
        $attackBonus = 5;
    }

    return $attackBonus;
}


function actionDice($level)
{
    $actionDice = "";

    if($level <= 4)
    {
        $actionDice = "1d20";
    }

    if($level == 5)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 7 && $level <= 10)
    {
        $actionDice = "1d20+1d20";
    }

    return $actionDice;
}




function title($level, $alignment)
{
    $title = "";

    if($alignment == "Lawful")
    {

        if($level == 1)
        {
            $title = "Conformist";
        }
        else if($level == 2)
        {
            $title = "Homebody";
        }
        else if($level == 3)
        {
            $title = "Formalist";
        }
        else if($level == 4)
        {
            $title = "Traditionalist";
        }
        else
        {
            $title = "Conservative";
        }

    }

    if($alignment == "Neutral")
    {
        if($level == 1)
        {
            $title = "Changeling";
        }
        else if($level == 2)
        {
            $title = "Spell Seeker";
        }
        else if($level == 3)
        {
            $title = "Spell Weaver";
        }
        else if($level == 4)
        {
            $title = "Pathfinder";
        }
        else
        {
            $title = "Way Seeker";
        }
    }

    if($alignment == "Chaotic")
    {
        if($level == 1)
        {
            $title = "Nonconformist";
        }
        else if($level == 2)
        {
            $title = "Trickster";
        }
        else if($level == 3)
        {
            $title = "Prankster";
        }
        else if($level == 4)
        {
            $title = "Radical";
        }
        else
        {
            $title = "Free Spirit";
        }
    }

return $title;

}


function knownSpells($level)
{
    $spells = 0;

    switch($level)
    {
        case 1:
            $spells = 3;
        break;

        case 2:
            $spells = 4;
        break;
        
        case 3:
            $spells = 5;
        break;
        
        case 4:
            $spells = 6;
        break;

        case 5:
            $spells = 7;
        break;
        
        case 6:
            $spells = 8;
        break;
        
        case 7:
            $spells = 9;
        break;

        case 8:
            $spells = 10;
        break;
        
        case 9:
            $spells = 12;
        break;
        
        case 10:
            $spells = 14;
        break;

        default:
        $spells = 0;


    }

    return $spells;
}

function maxSpellLevel($level)
{
    $spellLevel = 0;

    if($level == 1 || $level == 2)
    {
        $spellLevel = 1;
    }

    if($level == 3 || $level == 4)
    {
        $spellLevel = 2;
    }

    if($level == 5 || $level == 6)
    {
        $spellLevel = 3;
    }

    if($level == 7 || $level == 8)
    {
        $spellLevel = 4;
    }
    
    if($level == 9 || $level == 10)
    {
        $spellLevel = 5;
    }

    return $spellLevel;
}



?>