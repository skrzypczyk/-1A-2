<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>S'inscrire</title>
	<meta name="description" content="Veuillez vous inscrire">
</head>
<body>

	<h1>S'inscrire</h1>
	<a href="login.php">Se connecter</a>


<?php if(isset($_SESSION["listOfErrors"])) { ?>



	<div style="background-color: #bf7b7b; color: white; padding: 20px;margin: 10px">
		<?php

		foreach ($_SESSION["listOfErrors"] as $error) {
			echo "<li>".$error;
		}


		unset($_SESSION["listOfErrors"]);
		?>
	</div>




<?php } ?>




	<form method="POST" action="register.php">

		<label>
			Nom :
			<input type="text" name="lastname" required="required">
		</label>


		<br>
		<label>
			Prénom :
			<input type="text" name="firstname" required="required">
		</label>


		<br>
		<label>
			Email :
			<input type="email" name="email" required="required">
		</label>

		<br>
		<label>
			Mot de passe :
			<input type="password" name="pwd" required="required">
		</label>


		<br>
		<label>
			Confirmation :
			<input type="password" name="pwdConfirm" required="required">
		</label>


		<br>
		<img src="captcha.php">
		<br>
		<label>
			Captcha :
			<input type="text" name="captcha" required="required">
		</label>

		<br>
		<input type="submit" value="S'inscrire">
	</form>



</body>
</html>