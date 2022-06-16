<?php
//Zero Levo Occupation - Kitsune


function getOccupation()
{
	$a00 = array("Kitsune geisha", "Kitsune", "Dagger", "1d4", "Wig & make-up");
	$a01 = array("Kitsune haiku poet", "Kitsune", "Staff", "1d4", "Quill pen & ink");
	$a02 = array("Kitsune ink merchant", "Kitsune", "Staff", "1d4", "3 vials of ink");
	$a03 = array("Kitsune musician", "Kitsune", "Staff", "1d4", "Koto (harp)");
	$a04 = array("Kitsune painter", "Kitsune", "Staff", "1d4", "Set of paint brushes");
	$a05 = array("Kitsune potter", "Kitsune", "Staff", "1d4", "Clay, 1 lbs");
	$a06 = array("Kitsune sake brewer", "Kitsune", "Club", "1d4", "1 bottle of sake");
	$a07 = array("Kitsune silk dyer", "Kitsune", "Scissors (as dagger)", "1d4", "Silk, 3 yards");
	$a08 = array("Kitsune silk merchant", "Kitsune", "Staff", "1d4", "Kimono");
	$a09 = array("Kitsune sword polisher", "Kitsune", "Short sword", "1d6", "Whetstone");

        $array1 = array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09);

        shuffle($array1);
        
        return $array1[0];
        
}

function tradeGoodsAddition($occupation, $weapon)
{
	if($weapon === "Pitchfork (as Spear)")
	{
		$animalArray = array(" (sheep)", " (goat)", " (cow)", " (duck)", " (goose)", " (mule)");
		shuffle($animalArray);
		return $animalArray[0];
	}
	else if($occupation === "Wainwright")
	{
		$cartArray = array(" containing tomatoes", " containing nothing", " containing straw", " containing your dead", " containing dirt", " containing rocks");
		shuffle($cartArray);
		return $cartArray[0];
	}
	else if($occupation === "Mercenary")
	{
		return "Hide Armour";
	}
	else if($occupation === "Outlaw")
	{
		return "Leather Armour";
	}
	else if($occupation === "Soldier")
	{
		return "Shield";
	}
	else
	{
		return "";
	}


}


?>