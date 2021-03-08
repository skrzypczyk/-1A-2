<?php
	session_start();
	//Factorisation !!! Eviter la redondance
	include "header.php"; // ou require

	require "functions.php";
?>

<h1>Mon super site</h1>

<h2>Se connecter</h2>
<a href="newUser.php">S'inscrire</a>

<?php


	if( count($_POST)==2 && !empty($_POST["email"])  && !empty($_POST["pwd"])){


		//Afficher OK si les identifiants sont bons sinon afficher NOK

		//Password_verify

		$email = $_POST["email"];
		$pwd = $_POST["pwd"];


		$connection = connectDB();

		//Va chercher en bdd les informations pour l'email provenant du formulaire
		$queryPrepared = $connection->prepare("SELECT * FROM mg23_users WHERE email = :email ");
		$queryPrepared->execute(["email"=>$email]);

		//On récupère les résultats de la requête SQL
		$result = $queryPrepared->fetch();

		//Si les résultats sont vides alors l'email ne correspond à rien
		if(empty($result)){
			echo '<div style="background-color: #bf7b7b; color: white; padding: 20px;margin: 10px">Les identifiants sont incorrects</div>';
		}else{

			$pwdHash = $result["pwd"];
			//Ok l'email existe mais est-ce que le mot de passe est correct
			if( password_verify($pwd, $pwdHash)){
				//Tout est bon

				$_SESSION["auth"] = true;
				$_SESSION["info"] = $result;

				header("Location: index.php");
			}else{
				//mot de passe incorrect
			echo '<div style="background-color: #bf7b7b; color: white; padding: 20px;margin: 10px">Les identifiants sont incorrects</div>';
			}
			
		}


	}



?>



<form method="POST">

	<input type="email" name="email">
	<input type="password" name="pwd">
	<input type="submit" value="Se connecter">

</form>


<?php
	include "footer.php";
?>