<?php

class Pays {

//attributs
private string $nom;
//private Equipe $equipe;
private array $equipes;


public function __construct (string $nom) {
    $this->nom = $nom;
    $this->equipes = [];
}

//GETTERS AND SETTERS

public function getNom()
{
return $this->nom;
}

public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

public function addEquipe(Equipe $equipe){
    $this->equipes[] = $equipe;
//ça équivaut à: array_push($this->joueurs, $joueur);
}

//Tableau pour afficher les équipes d'un pays:
public function afficherEquipes(){
    $result = "<div class='cadre1'><h2> $this</h2><ul>";
    foreach($this->equipes as $equipe){
    $result .= "<li>".$equipe->getNom()." "."(".$equipe->getdateCreation()->format("Y").")"."</li>";
    }
    $result .= "</ul></div>";

    return $result;
}

//Fonction __toString qui rapporte le nom du pays:
public function __toString(){
return $this->nom;
}
}