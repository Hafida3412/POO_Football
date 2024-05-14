<?php

class Joueur {

//attributs
private string $nom;
private string $prenom;
private DateTime $dateNaissance;

public function __construct(string $nom, string $prenom, string $dateNaissance){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = new DateTime($dateNaissance);
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


public function getPrenom() : string
{
return $this->prenom;
}


public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}


public function getDateNaissance() : DateTime
{
return $this->dateNaissance;
}


public function setDateNaissance($dateNaissance)
{
$this->dateNaissance = $dateNaissance;

return $this;
}

}
