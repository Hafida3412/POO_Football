<h1> POO Football</h1>

<?php

//require "Equipe.php";
//require "Joueurs.php";
//require "Pays.php";

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});

$equipe1 = new Equipe( "Juventus", "1897", []); // -> [] correspond au tableau des joueurs
$joueur1 = new Joueur("Ronaldo"," Cristiano", "1985-02-05", $equipe1);

$equipe2 = new Equipe("PSG", 1970, []);
$joueur2 = new Joueur("Lionel", "Messi", "1987-06-24", $equipe2);

$equipe3 = new Equipe("FC Barcelone", "1899", []);
$joueur3 = new Joueur("Neymar", "Junior","1992-02-05", $equipe3);
$joueur3 = new Joueur("Lionel", "Messi", "1987-06-24", $equipe3);

$equipe4 = new Equipe("Racing Club Stras", "1906", []);
$joueur4 = new Joueur("Kevin", "Gameiro", "1987-05-09", $equipe4);

$equipe5 = new Equipe("Manchester United", "1878", []);
$joueur5 = new Joueur("Marcus", "Rashford", "1997-10-31", $equipe5);

$pays1 = new Pays("Italie", $equipe1);
$pays2 = new Pays("France", $equipe2);
$pays3 = new Pays("Espagne", $equipe3);
$pays4 = new Pays("Angleterre", $equipe5);

//var_dump($joueur1);

//var_dump ($equipe1);

//var_dump($pays1);

/*echo "$joueur1";
echo "<br>";
echo "<br>";
echo "$equipe1";
echo "<br>";
echo "<br>";
echo "$pays1";
echo "<br>";
echo "<br>";*/

echo $joueur1->getInfos();

echo $equipe1->afficherJoueurs();
echo $equipe2->afficherJoueurs();
echo $equipe3->afficherJoueurs();
echo $equipe4->afficherJoueurs();
echo $equipe5->afficherJoueurs();
echo "<br>";
echo "<br>";
echo $pays1->afficherEquipes();
echo $pays2->afficherEquipes();
echo $pays3->afficherEquipes();
echo $pays4->afficherEquipes();