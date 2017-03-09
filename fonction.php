<?php
/*Exercice 1*/
/*faire une fonction qui retourne true*/
function andrea(){
	return true;
}
/*EXERCICE 2*/
/*fonction qui prends en parametre une chaine de caractere , et qui retourne cette chaine*/
function coucou(string $cava){
	return $cava;
}
/*EXERCICE 3*/
/*faire une fonction qui prend en paramettre 2 chaine de caractere et qui prends en conquatenation des 2 */
function coucou(string $cava,$coucou){
	return $cava.$coucou;
}
/*EXERCICE 4*/
/*faire une fontion qui prends en para 2 nombre , la fonction  doit return le premier nompbre est plus grand est plus grand que le 2 , le premier nombre est plus petit si le deuxieme et plus grand et les 2 sont egaux si ils sont egaux*/
function nombres($numero1 , $numero2) {
	if ($numero1 > $numero2) {
		return 'le premier nombre est plus grand';
	}
		elseif ($numero1 <$numero2) {
			return 'le premier est plus petit';
		}
		else{
			return 'ils sont egaux';
		}
}
/*EXERCICE 5*/
/*faire une function qui prends en paramettre un nombre et une chaine et qui prends en conquatenation*/
function chaine($chaine , $nombre){
	return $chaine.$nombre;
}
/*EXERCICE 6*/
/*faire une fonction qui prends nom prenom et age , doit renvoyer une chaine de la forme bonjour+nom+prenom+,tu as+age+ans */
function blabla($nom , $prenom , $age){
	return ' bonjour '.$nom.$prenom' tu as '.$age' ans ';
}
/*EXERCICE 7*/
function nombres($age , $genre) {
	if ($genre = 'homme' && $age >= 18) {
		return 'Vous êtes un homme et vous êtes majeur';
	}
		elseif ($genre == 'homme' && $age < 18) {
			return 'Vous êtes un homme et vous êtes mineur';
		}
		if ($genre = 'femme' && $age >= 18) {
		return 'Vous êtes un femme et vous êtes majeur';
	}
		elseif ($genre = 'femme' $age > 18) {
			return 'Vous êtes un femme et vous êtes mineur';
		}
}

/*EXERCICE 8*/
$nombr1 = 1;
$nombr2 = 4;
$nombr3 = 6;
function nombre($nombr1 , $nombr2 , $nombr3){
	return $nombr1.$$nombr2.$nombr3;

}
?>