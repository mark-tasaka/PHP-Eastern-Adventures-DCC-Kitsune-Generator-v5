<?php


function getLanguages($intMod, $luckMod, $luckySign, $alignment, $intelligence)
{
        $bonusLanguages = 0;
        
        $languages = array();
        array_push($languages, 'Common');

        $languagesAvailable = array("Amabie","Ashinaga-tenaga", "Bakemono", "Bakeneko ", "Hitotsume-kozō", "Jorōgumo", "Kappa", "Karura", "Kitsune", "Komainu", "Koropokuru", "Kuda-gitsune", "Mikoshi-nyūdō ", "Mizuchi", "Mujina", "Namahage", "Nekomata", "Ningyo", "Nure-onna", "Ogre-magi", "Oni", "Onihitokuchi", "Onikuma", "Ryuu", "Shojo", "Tengu", "Tsuchigumo");

        $alignmentTongue = "Alignment Tongue (" . $alignment . ")";

        array_push($languagesAvailable, $alignmentTongue);

        shuffle($languagesAvailable);

        if($intMod > 0)
        {
                $bonusLanguages += ($intMod*2);
        }
        

        if($luckySign == "28" && $luckMod > 0)
        {
            $bonusLanguages += $luckMod;
        }

        for($i = 0; $i < $bonusLanguages; $i++)
        {
            array_push($languages, $languagesAvailable[$i]);
        }

        return $languages;

}


?>