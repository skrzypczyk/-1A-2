<?php
$firstname = "   yVEs pieRRe ";
$lastname = "    SKRZéyPcZYk  ";


// "   yVEs pieRRe  " -> "Yves Pierre"
function cleanFirstname(&$firstname){

	//$firstname = str_replace(" ","",$firstname);
    //$firstname = ltrim($firstname);
    //$firstname = rtrim($firstname);

    $firstname = trim($firstname);
    $firstname = strtolower($firstname);
    $firstname = ucwords($firstname);
    //$firstname = ucwords(strtolower(trim($firstname)));
}


// "    SKRZéyPcZYk  " -> "SKRZÉYPCZYK"
function cleanLastname(){
	global $lastname;

	//$lastname = trim($lastname);
	//$lastname = mb_strtoupper($lastname);

	$lastname = mb_strtoupper(trim($lastname));
	
}

cleanFirstname($firstname);
cleanLastname();


echo "Bonjour ".$firstname." ".$lastname;

?>