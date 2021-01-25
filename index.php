<?php
	//Factorisation !!! Eviter la redondance
	include "header.php"; // ou require
?>


	<!-- Mon commentaire -->

	<?php

		//Mon commentaire sur ligne

		/*
			sur plusieurs lignes
		*/

		//echo "Hello world";
		//echo "Hello world";




			/*

		$firstname = "Yves"; //STRING
		$age = 36; //INT
		$size = 1.96; //FLOAT 
		$adult = true; //BOOLEAN
		$cc = null; // NULL
		

		//Concaténation = Addition des strings
		echo "<i>Bonjour</i> ".$firstname." welcome<br>";


		$x = 5;
		$y = 6;
		//Afficher : Le résultat de 5 + 6 donne 11
		echo "Le résultat de ".$x." + ".$y." donne ".($x+$y)."<br>";


		
			Addition : +
			Soustraction : -
			Division : /
			Multiplication : *
			Modulo : %

			Incrémentation : Decrémentation
		

		$z = 0;
		$z = $z + 1;
		$z += 1;
		$z++;
		++$z;



		$z = 0;
		echo $z ; // 0
		echo $z++ ; // 0 Post-incrémentation
		echo $z ; // 1
		echo ++$z ; // 2
		echo $z ; // 2
		echo $z-1 ; // 1
		echo $z ; // 2
		echo $z++ ; //2
		echo $z ; //3
		echo $z+=1 ; // 4
		echo $z ; //4
		echo $z -= 1 ; // 3
		echo $z = $z-1 ; // 2
		echo $z * 2 ; // 4
		echo $z ; // 2

		

		$age = 20;

		//100 ou + afficher menteur

		if($age < 18) {
			echo "Mineur";
		}
		else if($age >= 100 || $age<=0){
			echo "Menteur";
		}
		else if($age == 18) {
			echo "Tout juste majeur";
		}
		else {
			echo "Majeur";
		}

		

		$civility = "Autre";

		
		if($civility == "Mr"){
			echo "Bonjour Monsieur";
		}else if($civility == "Mme"){
			echo "Bonjour Madame";
		}else{
			echo "Bonjour";
		}

		switch ($civility) {
			case 'Mr':
				echo "Bonjour Monsieur";
				break;
			case 'Mme':
				echo "Bonjour Madame";
				break;
			default:
				echo "Bonjour";
				
		}


			Dans le cas ou l'on ne met pas de break :
			if($civility == "Mr"){
				echo "Bonjour Monsieur";
				echo "Bonjour Madame";
			}else if($civility == "Mme"){
				echo "Bonjour Madame";
			}
			echo "Bonjour";

		

			Condition ternaire :

			instruction (condition)?vrai:faux;


		$adult = true;
		
		if($adult == true){
			echo "Vous êtes adulte";
		}else{
			echo "Vous n'êtes pas adulte";
		}


		echo ($adult == true)?"Vous êtes adulte":"Vous n'êtes pas adulte";



			
			Le null coalescent

		

			$cc = null;

			if( $cc == null){
				echo "Pas encore de note";
			}else{
				echo $cc;
			}

			echo ( $cc == null)?"Pas encore de note" : $cc;

			echo $cc ?? "Pas encore de note";


			BOUCLES :

			FOR : nb itération connu
			for(init du compteur ; condition de boucle ; incrémentation)
			WHILE : nb itération inconnu
			DO WHILE : au moins une itération
			FOREACH :  Parcourir un tableau

		

		//Exercice afficher les chiffres entre 0 et 10

		for( $cpt=0 ; $cpt <=10 ; $cpt++){
			echo $cpt;
		}


		
		$numbertoWin = 145;
		$dice = rand(1, 1000);
		$cpt = 0;
		
		while ($numbertoWin != $dice) {
			echo "Perdu<br>";
			$dice = rand(1, 1000);
			$cpt ++;
		}

		echo "Gagné au bout de ".$cpt." tentative(s)";
		
		*/


		$numbertoWin = 1;
		$cpt = 0;
		//Au moins 1 itération
		do{
			$dice = rand(1, 6);
			$cpt++;

		}while($numbertoWin != $dice);

		echo "Gagné au bout de ".$cpt." tentative(s)";


	?>



<?php
	include "footer.php";
?>