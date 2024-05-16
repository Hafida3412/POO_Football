<?php

class Pays {

//attributs
private string $nom;
//private Equipe $equipe;
private array $equipes;

public function __construct (string $nom, Equipe $equipe) {
    $this->nom = $nom;
    $this->equipes = [];
    $this->addEquipe($equipe); // Ajoutez l'équipe passée en paramètre à la liste des équipes     
  
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
    $result = "<h2> Equipes de $this</h2><ul>";
    foreach($this->equipes as $equipe){
    $result .= "<li>".$equipe->getNom()." "."(".$equipe->getdateCreation()->format("Y").")"."</li>";
    }
    $result .= "</ul>";

    return $result;
}

    public function __toString(){
    return $this->nom;
}

}