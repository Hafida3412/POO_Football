<h1> POO Football</h1>

<?php

//require "Equipe.php";
//require "Joueurs.php";
//require "Pays.php";

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});

$equipe1 = new Equipe( "Juventus", 1897, $joueur1);

$joueur1 = new Joueur("Ronaldo"," Christiano", 1985-02-05, $equipe1);

$pays1 = new Pays("Italie", $equipe1);

//var_dump($joueur1);

//var_dump ($equipe1);

//var_dump($pays1);

echo "$joueur1";
echo "<br>";
echo "<br>";
echo "$equipe1";
echo "<br>";
echo "<br>";
echo "$pays1";
echo "<br>";
echo "<br>";

echo $joueur1->getInfos();
echo $equipe1->afficherJoueurs();

