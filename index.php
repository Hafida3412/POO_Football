<h1> POO Football</h1>

<?php

//require "Equipe.php";
//require "Joueurs.php";
//require "Pays.php";

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});

$Juventus = new Equipe( "Juventus", "1897-11-05"); // -> [] correspond au tableau des joueurs
$Ronaldo = new Joueur("Ronaldo"," Cristiano", "1985-02-05");

$Psg = new Equipe("PSG", 1970);
$Messi = new Joueur("Lionel", "Messi", "1987-06-24");
$Mbappe = new Joueur("Kilian", "Mbappe", "1998-12-20");

$Barcelone = new Equipe("FC Barcelone", "1899");
$Neymar = new Joueur("Neymar", "Junior","1992-02-05");

$Rcs = new Equipe("Racing Club Stras", "1906-01-01");
$Gameiro = new Joueur("Kevin", "Gameiro", "1987-05-09");

$Manchester = new Equipe("Manchester United", "1878");
$Rashford = new Joueur("Marcus", "Rashford", "1997-10-31");

$Italie = new Pays("Italie", $Juventus);
$France = new Pays("France", $Psg);
$Espagne = new Pays("Espagne", $Barcelone);
$Angleterre = new Pays("Angleterre", $Manchester);

$c1 = new Contrat($Psg, $Messi, "2021-01-03");
$c2 = new Contrat($Psg, $Mbappe, "2017-04-01");
$c3 = new Contrat($Psg, $Neymar, "2017-11-10");

$c4 = new Contrat($Barcelone, $Neymar, "2013-05-03");
$C5 = new Contrat($Juventus, $Ronaldo, "2018-11-05");

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

echo $Juventus->afficherJoueurs();
echo $Psg->afficherJoueurs();
echo $Barcelone->afficherJoueurs();
echo $Rcs->afficherJoueurs();
/*echo $Manchester->afficherJoueurs();*/
echo "<br>";
echo "<br>";
echo $Italie->afficherEquipes();
echo $France->afficherEquipes();
echo $Espagne->afficherEquipes();
echo $Angleterre->afficherEquipes();