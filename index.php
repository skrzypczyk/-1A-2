<?php
	session_start();
	//Factorisation !!! Eviter la redondance
	include "header.php"; // ou require
?>

<h1>Mon super site</h1>




<?php if( isset($_SESSION["auth"]) && $_SESSION["auth"] == true) { ?>

	<h2>Bonjour <?php echo $_SESSION["info"]["firstname"]?></h2>

	<a href="logout.php">Se déconnecter</a>

<?php }else{ ?>

	<a href="newUser.php">S'inscrire</a>
	<a href="login.php">Se connecter</a>


<?php } ?>



<?php
	include "footer.php";
?>