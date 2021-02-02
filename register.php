<?php


/*

Vérifier les champs 
Se connecter à la bdd
Enregistrer l'user si aucun problème
rediriger sur la page se connecter en disant qu'il est connecté
Sinon rediriger sur le form avec les erreurs

*/

//Array ( [lastname] => Skrzypczyk [firstname] => Yves [email] => y.skrzypczyk@gmail.com [pwd] => Test1234 [pwdConfirm] => Test1234 )
//print_r($_POST);


//Vérifier que l'on a 5 champs et qu'ils ne soient pas vides
if ( count($_POST) == 5
	 && !empty($_POST["lastname"]) 
	 && !empty($_POST["firstname"])
	 && !empty($_POST["email"])
	 && !empty($_POST["pwd"])
	 && !empty($_POST["pwdConfirm"])
	) {


	//Nettoyage des valeurs
	$firstname = ucwords(strtolower(trim($_POST["firstname"])));
	$lastname = mb_strtoupper(trim($_POST["lastname"]));


	// prénom -> min:2 max:50
	if( strlen($firstname)<2 || strlen($firstname)>50 ){

		echo "Le prénom (".$firstname.") doit faire entre 2 et 50 caractères<br>";

	}


	// nom -> min:2 max:100
	if( strlen($lastname)<2 || strlen($lastname)>100 ){

		echo "Le Nom (".$lastname.")  doit faire entre 2 et 100 caractères<br>";

	}




	//Email -> format respecté

	//Pwd -> 1 chiffre, 1 minuscule, 1 majuscule, min 8 caractères


	//pwdConfirm -> = Pwd

}else {
	die("Tentative de Hack");
}
