<?php
$firstname = "   yVEs pieRRe ";
$lastname = "    SKRZéyPcZYk  ";


// "   yVEs pieRRe  " -> "Yves Pierre"
function cleanFirstname(&$firstname){

	...

}


// "    SKRZéyPcZYk  " -> "SKRZÉYPCZYK"
function cleanLastname(){
	global $lastname;


	...
}

cleanFirstname($firstname);
cleanLastname();


echo "Bonjour ".$firstname." ".$lastname;

?>