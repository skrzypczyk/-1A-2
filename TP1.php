<?php


/*
for($number=2; $number<=1000; $number++){


	//Afficher premier ou non premier en fonction de $number
	//Un nb premier n'est divisble que par 1 ou lui même

	//Tester avec 8 - 7 - .... - 2

	$isPrime = true;

	for($i=$number-1 ; $i>=2 ; $i-- ){
		if( $number%$i == 0 ){
			$isPrime = false;
			break;
		}
	}


	if($isPrime == true){
		echo $number."-";
		//echo $number. " est Premier<br>";
	}else{
		//echo $number. " n'est pas Premier<br>";
	}

}
*/

//Afficher les Nombres premiers entre 0 et 1000
//Afficher les 100 premiers Nombres premiers

$cpt = 0;
$numberToTest = 2;

while($cpt<=1000){

	$isPrime = true;

	for($i=2; $i<$numberToTest ; $i++ ){
		if( $numberToTest%$i == 0 ){
			$isPrime = false;
			break;
		}
	}


	if($isPrime == true){
		echo $numberToTest."-";
		$cpt++;
	}


	$numberToTest++;
}




?>

