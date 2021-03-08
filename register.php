<?php
session_start();

require "functions.php";


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
	$email = mb_strtolower(trim($_POST["email"]));
	$pwd = $_POST["pwd"];
	$pwdConfirm = $_POST["pwdConfirm"];


	$listOfErrors = [];


	// prénom -> min:2 max:50
	if( strlen($firstname)<2 || strlen($firstname)>50 ){

		$listOfErrors[] = "Le prénom (".$firstname.") doit faire entre 2 et 50 caractères";

	}


	// nom -> min:2 max:100
	if( strlen($lastname)<2 || strlen($lastname)>100 ){

		$listOfErrors[] =  "Le nom (".$lastname.") doit faire entre 2 et 100 caractères";

	}


	//Email -> format respecté
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    $listOfErrors[] =  "L'adresse email n'est pas valide.";
	}else{

		//Vérifier l'unicté de l'email
		//$listOfErrors[] =  "L'adresse email existe déjà.<br>";

		$connection = connectDB();

		$queryPrepared = $connection->prepare("SELECT * FROM mg23_users WHERE email = :email ");

		$queryPrepared->execute(["email"=>$email]);

		$result = $queryPrepared->fetch();

		if( !empty($result)){
			$listOfErrors[] =  "L'adresse email existe déjà.";
		}

	}


	




	//Pwd -> 1 chiffre, 1 minuscule, 1 majuscule, min 8 caractères

	if( strlen($pwd)<8
		 || !preg_match("/[a-z]/", $pwd)
		 || !preg_match("/[A-Z]/", $pwd)
		 || !preg_match("/[0-9]/", $pwd)
	 ){

		$listOfErrors[] =  "Le mot de passe doit faire plus de 8 caractères avec une minuscule, une majuscule et un chiffre";
	}


	//pwdConfirm -> = Pwd

	if($pwd != $pwdConfirm) {
		$listOfErrors[] =  "Le mot de passe de confirmation ne correspond pas";
	}



	if( empty($listOfErrors) ) {

		
		//Je peux insérer en base l'user

		//Insertion de l'utilisateur en bdd via ma connection

		//Préparation de la requête
		$queryPrepared = $connection->prepare("INSERT INTO mg23_users (firstname, lastname, email, pwd) VALUES ( :firstname , :lastname , :email , :pwd );");


		$pwd = password_hash($pwd, PASSWORD_DEFAULT);

		//Execution de la requête
		$queryPrepared->execute([
									"firstname"=>$firstname,
									"lastname"=>$lastname,
									"email"=>$email,
									"pwd"=>$pwd,
		]);

		//Rediriger l'user vers login.php

		header("Location: login.php");
		

	}else{

		header("Location: newUser.php");	
		$_SESSION["listOfErrors"] = $listOfErrors;

	}




}else {
	die("Tentative de Hack");
}
