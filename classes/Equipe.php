<?php

class Equipe {

//attributs
private string $nom;
private DateTime $dateCreation;

private array $joueurs;


public function __construct(string $nom, string $dateCreation){
    $this->nom = $nom;
    $this->dateCreation = new DateTime($dateCreation);
    $this->joueurs = [];
      
}

//GETTERS AND SETTERS
public function getNom() : string
{
return $this->nom;
}


public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

public function getDateCreation() : DateTime
{
return $this->dateCreation;
}


public function setDateCreation($dateCreation)
{
$this->dateCreation = $dateCreation;

return $this;
}

public function getJoueurs()
{
    return $this->joueurs;
}

public function setJoueurs($joueurs)
{
    $this->joueurs = $joueurs;
    
    return $this;
}

public function addJoueur(Joueur $joueur){/*on rajoute un joueur dans l'équipe*/
    $this->joueurs[] = $joueur;
//ça équivaut à: array_push($this->joueurs, $ joueur);
}

public function __toString(){
    return $this->nom . " (".$this->dateCreation->format("Y").")";
}

}