<?php

/*EXERCICE 1*/

$andrea = 0;
/*tant que cet var n'atteint pas 10 , l'afficher et l'incrementée*/
while ($andrea < 10) { 
	echo $andrea;
	$andrea++;
}
/*ECERCICE 2*/
/*creer 2 var , init la 1 a 0 et 2 a entre 1 et 100
tant que la 1 n'est pas sup a 20 , multiplier la 1 avec la deuxieme , afficher le resultat et incrementer la 1;*/
$numero1 = 0;
$numero2 = 4;

while ( $numero1 < 20) {
	$resultat = ($numero1 * $numero2);
	echo $resultat."<br/>";
	$numero1++;
}

/*EXO 3*/
/*creer 2 var , 1 a 100 ; 2 entre 1 et 100 
tant que 1 n'est pas inf ou egal a 10; multi 1 et 2 afficher le resultat et decrementer la 1 var */
$num1 = 100;
$num2 = 34;

while ( $num1 >= 10) {
	$resultat = ($num1 * $num2);
	echo $resultat."<br/>";
	$num1--;
}
/*EXERCICE 4*/
/*creer une var a 1 , tant que cette var n'atteint pas 10 il faut l'afficher et l'incrementer de la moitiée de sa valeur */
$Num1=1;
while ($Num1 <10) { 
	echo $Num1."<br/>";
	$Num1 = $Num1 + $Num1/2;
}
/*EXERCICE 5*/
/*en allant de 1 a 15 avec un pas de 1, afficher le message " on y arrive presque"*/

for ($i=0; $i < 15 ; $i++) { 
	echo "on y arrive presque";
}
/*EXERCICE 6*/
/*en allant de 20 a 0 avec un pas de 1 , afficher le message " c'est presque bon"*/
for ($i=20; $i > 0 ; $i++) { 
	echo "c'est presque bon";
}

/*EXO 7*/
/*en allant de 1 a 100 avec un pas de 15 affcher on tient le bon bout*/
for ($i=1; $i > 100 ; $i=$i+15) { 
	echo "on tient le bon bout";
}

/*EXERCICE 8*/
/*en allant de 200 a 0 avec un pas de 12 , afficher enfin !*/
for ($i=200; $i > 0 ; $i=$i+12) { 
	echo "enfin!!!";
}
?>