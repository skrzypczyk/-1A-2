<?php

/*
function helloWorld(){

	echo "Salut";

}


helloWorld();



$firstname = "Yves";

function helloYou($firstname = ""){

	echo "Bonjour ".$firstname;

}


helloYou($firstname);
helloYou("Adrian");
helloYou("Pierre");

helloYou();


function isEven($number){
	return !($number%2);
}



if( isEven(5) ){
	echo "Paire";
}else{
	echo "Impaire";
}


$firstname = "Yves";

// & permet de dire que la variable lastname point sur le meme espace de mémoire que firstname
$lastname = &$firstname;

$lastname = "SKRZYPCZYK";
$firstname = "toto";

echo $lastname;



function vasTuAvoirTonDiplome(&$moyenne){

	$moyenne = round($moyenne, 1);

	if($moyenne>10){
		return true;		
	}else{
		return false;
	}

}


$moyenneKenny = 11.52454432432543423;

if(vasTuAvoirTonDiplome($moyenneKenny)){
	echo "Bravo Kenny pour ta moyenne de ".$moyenneKenny;
}else{
	echo "C'est balot";
}



$fruits = ["Banane","Clémentine","Pomme","Abricot"];

sort($fruits);

print_r($fruits);


*/

$bidon = "gsf;gfds;gfds;;gfds;gfds;gfds;;gdfgfdsgdfs;gfd";
$bidon = str_replace(";", "", $bidon);


/*
function str_replace($search, $replace, $string){

	for ($i=0; $i < strlen($string) ; $i++) { 
		if($string[$i] != $search){
			echo $bidon[$i];	
		}else{
			echo $replace;
		}
	}

}
*/




?>



