<?php
//Exercice 1 Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :l'afficher , l'incrementer.
//initialisation de la variable à 0
$papate = 0;
//Boucle de la variable
//Tant que i d'atteint pas 10 
while ($papate < 10) { 
	//On affiche la variable papate à chaque itération
	echo "<br />".($papate);
	//Variable s'incrémente de +1 à chaque itération
	$papate ++;
}

//Exercice 2 Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 : multiplier la première variable avec la deuxième , afficher le résultat , incrementer la première variable.
//Initialisation de 2 variables
$neptune = 0;
$champoing = 60;
//Boucle tant que var neptune inférieure ou égale à 20
while ( $neptune <= 20) {
	echo "<br /><br />".$neptune*$champoing;
	$neptune ++; //incrémentation +1 à chaque itération
}

//Exercice 3 Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas inférieur ou égale à 10 : multiplier la première variable avec la deuxième , afficher le résultat , décrémenter la première variable.
$variable1 = 100;
$variable2 = 50;

while ($variable1 > 10) {
	echo "<br />".$variable1*$variable2."<br />";
	$variable1 --;
}

//Exercice 4 Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut : l'afficher , l'incrementer de la moitié de sa valeur.
$kebab = 1;

while ( $kebab < 10) {
	echo $kebab ."<br/>";
	$kebab += ($kebab / 2);
}

//Exercice 5 En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
for ($i=1; $i <= 15 ; $i++) { 
	echo "On y arrive presque <br />";
}

//Exercice 6 En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
for ($i=20; $i >= 0 ; $i--) { 
	echo "C'est presque bon <br />";
}
//Exercice 7 En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
for ($i=1; $i <= 100 ; $i+=15) { 
	echo "On tient le bon bout <br />";
}
//Exercice 8 En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!
for ($i=200; $i >= 0 ; $i-=12) { 
	echo "Enfin !!!! <br />";
}








?>