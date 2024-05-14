<?php

class Equipe {

//attributs
private string $nom;
private DateTime $dateCreation;

public function __construct(string $nom, string $dateCreation){
    $this->nom = $nom;
    $this->dateCreation = new DateTime ($dateCreation);
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

public function __toString(){
    return $this->nom;
}

}