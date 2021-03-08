<?php
	//Factorisation !!! Eviter la redondance
	include "header.php"; // ou require
?>

<h1>Mon super site</h1>

<h2>Se connecter</h2>
<a href="newUser.php">S'inscrire</a>

<?php


	if( count($_POST)==2 && !empty($_POST["email"])  && !empty($_POST["pwd"])){


		//Afficher OK si les identifiants sont bons sinon afficher NOK

		//Password_verify

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