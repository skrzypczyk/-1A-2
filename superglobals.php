<?php

session_start();

/*

	-> Accessible partout
	-> On parle ici de cookie, session, etc...
	-> Commence toujours par $_ et doit être en majuscule
	-> ce sont des variables créées et alimentées par le serveur PHP
	-> ce sont des tableaux


*/

	//echo "<pre>";
	//print_r($_SERVER);
	//echo "</pre>";


//setcookie("pseudo", "Prof", time()+10);


//echo "Salut ".$_COOKIE['pseudo'];


$_SESSION["isConnected"] = true;
