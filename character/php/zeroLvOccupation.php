<?php
//Zero Levo Occupation


function getOccupation()
{
	$a30 = array("Ama (deep-sea pearl diver)", "Human", "Knife (as dagger)", "1d4", "Pearl");
	$a31 = array("Arborist", "Human", "Hand-axe", "1d6", "Pouch filled with seeds");
	$a32 = array("Armourer", "Human", "Hammer (as club)", "1d4", "Okashi gusoku [armour]");
	$a33 = array("Aspiring sushi chef", "Human", "Knife (as dagger)", "1d4", "3 lbs of raw fish");
	$a34 = array("Bandit", "Human", "Spear", "1d8", "Karuta tatami [armour]");
	$a35 = array("Boat builder", "Human", "Hammer (as club)", "1d4", "2 dozen iron nails");
	$a36 = array("Bonsai artist", "Human", "Clippers (as dagger)", "1d4", "Bonsai tree");
	$a37 = array("Calligrapher", "Human", "Short-sword", "1d6", "Calligraphy brush and fine ink");
	$a38 = array("Carpenter", "Human", "Hammer (as club)", "1d4", "Hemp rope, 50’ ");
	$a39 = array("Chopstick maker", "Human", "Chisel (as dagger)", "1d4", "Dozen pairs of chopsticks");

	$a40 = array("Coal miner", "Human", "Pick (as battle axe)", "1d10", "Bag filled with coal");
	$a41 = array("Firewood collector", "Human", "Hand-axe", "1d6", "Bundle of firewood");
	$a42 = array("Fish merchant", "Human", "Knife (as dagger)", "1d4", "10 lbs of fish");
	$a43 = array("Fisherman", "Human", "Knife (as dagger)", "1d4", "Fishing net, 10’x10'");
	$a44 = array("Fishing net mender", "Human", "Knife (as dagger)", "1d4", "3’ x 3’ net");
	$a45 = array("Fletcher", "Human", "Longbow", "1d6", "Quiver with 20 arrows");
	$a46 = array("Folklorist", "Human", "Short sword", "1d6", "Gozo (straw matt), rolled up");
	$a47 = array("Gambler", "Human", "Dagger", "1d4", "Playing cards");
	$a48 = array("Gardener", "Human", "Shovel (as staff)", "1d4", "Pine cones");
	$a49 = array("Geisha", "Human", "Knife (as dagger)", "1d4", "A wig and geisha make-up");

	$a50 = array("Geta (sandals) maker", "Human", "Chisel (as dagger)", "1d4", "3 pairs of sandals");
	$a51 = array("Gobo (burdock root) farmer", "Human", "Sickle (as hand-axe)", "1d6", "Bundle of burdock root");
	$a52 = array("Green tea farmer", "Human", "Sickle (as hand-axe)", "1d6", "Jar filled with tea leaves");
	$a53 = array("Haiku poet", "Human", "Short-sword", "1d6", "Calligraphy brush and fine ink");
	$a54 = array("Hair stylist", "Human", "Scissors (as dagger)", "1d4", "Hand mirror");
	$a55 = array("Herbalist", "Human", "Knife (as dagger)", "1d4", "Bundle of herbs");
	$a56 = array("Ikebana florist", "Human", "Knife (as dagger)", "1d4", "Bundle of cut flowers");
	$a57 = array("Indentured servant", "Human", "Club", "1d4", "Small bag filled with dried barley");
	$a58 = array("Inn keeper", "Human", "Club", "1d4", "Tinderbox, flint & steel");
	$a59 = array("Kabuki theatre performer", "Human", "Staff", "1d4", "Theatrical attire");

	$a60 = array("Kimono maker", "Human", "Scissors (as dagger)", "1d4", "Unfinished kimono");
	$a61 = array("Kite maker", "Human", "Knife (as dagger)", "1d4", "Yard of kite fabric");
	$a62 = array("Koi (carp) breeder", "Human", "Staff", "1d4", "2 lbs of dried fish food");
	$a63 = array("Koto (harp) performer", "Human", "Walking stick (as staff)", "1d4", "Koto (harp)");
	$a64 = array("Lantern maker", "Human", "Chisel (as dagger)", "1d4", "Cast iron lantern");
	$a65 = array("Masseur", "Human", "Walking stick (as staff)", "1d4", "Conical hat");
	$a66 = array("Ningyozukai (puppeteer)", "Human", "Staff", "1d4", "Puppet");
	$a67 = array("Noh theatre performer", "Human", "Staff", "1d4", "Theatrical attire");
	$a68 = array("Palanquin bearer", "Human", "Knife (as dagger)", "1d4", "Wicker backpack");
	$a69 = array("Pauper", "Human", "Walking stick (as staff)", "1d4", "Bag filled with dried red beans");
	$a70 = array("Peasant Levy", "Human", "Spear", "1d8", "Jingasa (conical war helmet)");
	$a71 = array("Potter", "Human", "Staff", "1d4", "5 lbs of clay");
	$a72 = array("Puppet maker", "Human", "Chisel (as dagger)", "1d4", "Puppet");
	$a73 = array("Rice farmer", "Human", "Sickle (as hand-axe)", "1d6", "5 lbs of uncooked rice");
	$a74 = array("Rice-paper maker", "Human", "Knife (as dagger)", "1d4", "3 lbs of uncooked rice");
	$a75 = array("Sailor", "Human", "Spear", "1d8", "Lantern, hooded");
	$a76 = array("Sake brewer", "Human", "Knife (as dagger)", "1d4", "3 bottles of sake");
	$a77 = array("Sansuke (bathhouse attendant)", "Human", "Walking stick (as staff)", "1d4", "Back scrubbing sponge");
	$a78 = array("Scavenger", "Human", "Club", "1d4", "Iron pot");
	$a79 = array("Shakuhachi (flute) performer", "Human", "Staff", "1d4", "Skakuhachi (flute)");
	$a80 = array("Silk dyer", "Human", "Scissors (as dagger)", "1d4", "1 yard of silk");
	$a81 = array("Silk weaver", "Human", "Knife (as dagger)", "1d4", "2 yards of fine silk");
	$a82 = array("Silkworm breeder", "Human", "Knife (as dagger)", "1d4", "Jar filled with silkworm larva");
	$a83 = array("Soya bean famer", "Human", "Sickle (as hand axe)", "1d6", "5 lbs of soya beans");
	$a84 = array("Soya sauce brewer", "Human", "Knife (as dagger)", "1d4", "3 bottles of soy sauce");
	$a85 = array("Storyteller", "Human", "Walking stick (as staff)", "1d4", "Bamboo canteen");
	$a86 = array("Sumo wrestler", "Human", "Walking stick (as staff)", "1d4", "10 lbs of uncooked rice");
	$a87 = array("Sword polisher", "Human", "Short sword", "1d6", "Sword stand");
	$a88 = array("Taiko Drummer", "Human", "Taiko drumsticks x 2 (as clubs)", "1d4", "Taiko drum");
	$a89 = array("Tatami mat maker", "Human", "Hammer (as club)", "1d4", "Silk rope, 50’");
	$a90 = array("Tattoo artist", "Human", "Knife (as dagger)", "1d4", "Needles and inks");
	$a91 = array("Tea ceremony assistant", "Human", "Knife (as dagger)", "1d4", "Jar filled with green tea powder");
	$a92 = array("Thug", "Human", "Mace", "1d6", "Karuta tatami [armour]");
	$a93 = array("Unskilled labourer", "Human", "Hammer (as club)", "1d4", "Dozen wooden pitons");
	$a94 = array("Vagrant", "Human", "Walking stick (as staff)", "1d4", "Pouch containing dried tea leaves");
	$a95 = array("Village idiot", "Human", "Spear", "1d8", "Conical hat");
	$a96 = array("Wigmaker", "Human", "Knife (as dagger)", "1d4", "Wig");
	$a97 = array("Wokou (pirate)", "Human", "Spear", "1d8", "Conical hat");
	$a98 = array("Woodblock artisan", "Human", "Chisel (as dagger)", "1d4", "Woodblock print");
	$a99 = array("Yakuza (gangster)", "Human", "Short sword", "1d6", "Tattoo needles and ink");

        $array1 = array($a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50, $a51, $a52, $a53, $a54, $a55, $a56, $a57, $a58, $a59, $a60, $a61, $a62, $a63, $a64, $a65, $a66, $a67, $a68, $a69, $a70, $a71, $a72, $a73, $a74, $a75, $a76, $a77, $a78, $a79, $a80, $a81, $a82, $a83, $a84, $a85, $a86, $a87, $a88, $a89, $a90, $a91, $a92, $a93, $a94, $a95, $a96, $a97, $a98, $a99);

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