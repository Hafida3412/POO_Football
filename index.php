<h1> POO Football</h1>

<?php

//require "Equipe.php";
//require "Joueurs.php";
//require "Pays.php";

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});

//CREATION DES PAYS//
$Italie = new Pays("Italie");
$France = new Pays("France");
$Espagne = new Pays("Espagne");
$Angleterre = new Pays("Angleterre");
$Portugal = new Pays("Portugal");
$Argentine = new Pays("Argentine");
$Bresil = new Pays("Brésil");

//CREATION DES EQUIPES ET DES JOUEURS//
$Juventus = new Equipe( "Juventus", "1897-11-05", $Italie); 
$Ronaldo = new Joueur("Ronaldo"," Cristiano", "1985-02-05", $Portugal);

$Psg = new Equipe("PSG", 1970, $France);
$Messi = new Joueur("Lionel", "Messi", "1987-06-24", $Argentine);
$Mbappe = new Joueur("Kilian", "Mbappe", "1998-12-20", $France);

$Barcelone = new Equipe("FC Barcelone", "1899", $Espagne);
$Neymar = new Joueur("Neymar", "Junior","1992-02-05", $Bresil);

$Rcs = new Equipe("Racing Club Stras", "1906-01-01", $France);
$Gameiro = new Joueur("Kevin", "Gameiro", "1987-05-09", $France);

$Manchester = new Equipe("Manchester United", "1878-05-11", $Angleterre);
$Rashford = new Joueur("Marcus", "Rashford", "1997-10-31", $Angleterre);

$RealMadrid = new Equipe("Real Madrid", "1902-11-06", $Espagne);


//CREATION DES CONTRATS//
$c1 = new Contrat($Psg, $Messi, "2021-01-03");
$c2 = new Contrat($Psg, $Mbappe, "2017-04-01");
$c3 = new Contrat($Psg, $Neymar, "2017-11-10");
$c4 = new Contrat($Barcelone, $Neymar, "2013-05-03");
$c5 = new Contrat($Barcelone,  $Messi, "2004-11-08");
$c6 = new Contrat($Juventus, $Ronaldo, "2018-11-05");
$c7 = new Contrat($Manchester, $Ronaldo, "2021-11-03");
$c8 = new Contrat($RealMadrid, $Ronaldo, "2009-11-03");


//////////////////////////////////TESTS DU CODE/////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////////////////////

//AFFICHAGE DES JOUEURS D UNE EQUIPE//
echo $Juventus->afficherJoueurs();
echo $Psg->afficherJoueurs();
echo $Barcelone->afficherJoueurs();
echo $Rcs->afficherJoueurs();
/*echo $Manchester->afficherJoueurs();*/

echo "<br>";
echo "<br>";

//AFFICHAGE DES EQUIPES D UN PAYS//
echo $Italie->afficherEquipes();
echo $France->afficherEquipes();
echo $Espagne->afficherEquipes();
echo $Angleterre->afficherEquipes();

echo "<br>";
echo "<br>";

//AFFICHAGE DES EQUIPES D UN JOUEUR//
echo $Ronaldo->afficherEquipes();
echo $Neymar->afficherEquipes();
echo $Messi->afficherEquipes();
echo $Mbappe->afficherEquipes();

