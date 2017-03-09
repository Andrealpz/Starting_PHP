<?php
/*EXERCICE 1*/
/*creer un tableau moi et valeur , janvier , fevrier etc...*/
$moi =["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
var_dump($moi);
/*EXERCICE2*/
/*avec le tableau 1 afficher la valeur de la troisieme ligne*/
echo $moi[2];
/*EXERCICE3*/
/*afficher la valeur de l'index 5*/
echo $moi[5];
/*EXERCICE4*/
/*modifier le mois de avril par julien*/
$moi[3]= 'julien';
/*EXERCICE5*/
/*creer un tableau assiossiatif avec les departements de haut de france et en valeur leur nom */
$departements= array( 
02=>'Aisne ',
59=>'Nord ',
60=>'Oise' ,
62=>'Pas-de-Calais',
80=>'Somme';
/*EXERCICE6*/
/*tableaux exercice 5 , afficher index 59;*/
echo $departements[59];
/*EXERCICE7*/
/*tabl 5 ajouter la ville de reims et departement*/
$departements[51]='reims';
/*EXERCICE8*/
/*avec tabl 1 , un boucle afficher toute les valeurs de ce tableau*/
for ($moi=0; $moi <= 12 ; $moi++) { 
	echo $moi;
}
/*EXERCICE9*/
/*tabl 5 afficher toute les valeurs avec les cle*/
foreach ($departements as $key => $value) {
	
	echo $key;
}
/*EXERCICE10*/
 foreach ($departements as $key => $value) {
	echo $value;
	echo $key;
}
echo "le departement de ".$value." a le numéro de ".$key;

?>