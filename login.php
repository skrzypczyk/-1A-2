<?php
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
		$queryPrepared = $connection->prepare("SELECT pwd FROM mg23_users WHERE email = :email ");

		$queryPrepared->execute(["email"=>$email]);

		$result = $queryPrepared->fetch();

		if(empty($result)){
			echo "NOK";
		}else{

			$pwdHash = $result["pwd"];

			if( password_verify($pwd, $pwdHash)){
				echo "OK";
			}else{
				echo "NOK";
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