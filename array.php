<?php 

include "header.php";



//$listOfStudents = array();

//$listOfStudents = [];

 // echo $listOfStudents; // ERREUR

//print_r($listOfStudents); //array()
//var_dump($listOfStudents); // array(0) { }



$listOfStudents = ["Vincent", "Alexandre-Emanuel", "Valentin", "Pierre", "Théo", "Paul"];
//print_r($listOfStudents); // Array ( [0] => Vincent [1] => Alexandre-Emanuel [2] => Valentin [3] => Pierre [4] => Théo [5] => Paul )

echo "<pre>";

//var_dump($listOfStudents);

echo "</pre>";



//Afficher Théo;
echo $listOfStudents[4];

//Ajouter un prénom à la liste "Lounis"

//$listOfStudents[6] = "Lounis";
$listOfStudents[] = "Lounis";


$listOfStudents[1]="Alexandru-Emanuel";



echo "<pre>";
//var_dump($listOfStudents);
echo "</pre>";


$student = [
				"lastname"=>"Pierre", 
				"firstname"=>"Marie", 
				"average"=>12
			];

//Afficher Prénom Nom a une moyenne de ...
//echo $student["firstname"]." ".$student["lastname"]." a une moyenne de ".$student["average"]; // Pierre Marie a une moyenne de 12


$listOfStudents = [ 
						["Akli", "LAOUCHEDI", 13], 
						["Kyliann", "BOURDONNAY", 15], 
						["Theo", "PARIS", 3] 
				];



echo "<pre>";
print_r($listOfStudents);
echo "</pre>";


//Afficher : Theo Paris a une moyenne de 3
echo $listOfStudents[2][0]." ".$listOfStudents[2][1]." a une moyenne de ".$listOfStudents[2][2];



$array = [
			0=>["test1"],
			1=>[
				0=>["test2"],
				1=>[
					0=>[
						0=>["test3"],
						1=>[
							0=>["test4"],
							1=>[
								0=>[0=>"test5"]
							]
						]
					],
					1=>[]
				]
			]
		]; // Dim = 7D

		//Afficher test5
		echo $array[1][1][0][1][1][0][0];


$student = [
				12=>"1A 2" , 
				"firstname"=>"Akli",
				5=>"Mr", 
				"lastname"=>"LAOUCHEDI", 
				"average"=>13
			];


$student[] = 21; // Clé => 13



print_r($student);


include "footer.php";


 ?>