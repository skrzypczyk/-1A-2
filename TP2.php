<?php

	$filiere = [
					"classe 1"=>[
						0=>["Simon", "FIOCRE", 22],
						1=>["Alexandre", "LELONG", 21],
						2=>["Bilel", "SAIGH", 18]
					],

					"classe 2"=>[
						0=>["Simon", "FIOCRE", 22],
						1=>["Alexandre", "LELONG", 21],
						2=>["Bilel", "SAIGH", 18]
					],

					"classe 3"=>[
						0=>["Vincent", "RAINAUD", 18],
						1=>["Rayane", "BOUSTANI", 18],
						2=>["Arthur", "BLANDIN", 19]
					]

				];


?>

<table border="1px">
	<thead>
		<tr>
			<th>Classe</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Age</th>
		</tr>
	</thead>
	<tbody>




		<?php


		foreach ($filiere as $classe => $listOfStudents) {
				
			foreach ($listOfStudents as $student) {
				//$student = ["Simon", "FIOCRE", 22]
				echo "<tr>";
				
				echo "<td>".$classe."</td>";
				echo "<td>".$student[0]."</td>";
				echo "<td>".$student[1]."</td>";
				echo "<td>".$student[2]."</td>";

				echo "</tr>";
			}


		}



		?>




	</tbody>
</table>





