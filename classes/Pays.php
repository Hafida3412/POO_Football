<?php

class Pays {

//attributs
private string $nom;
private Equipe $equipe;

public function __construct (string $nom, Equipe $equipe) {
    $this->nom = $nom;
    $this->equipe = $equipe;
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

public function getEquipe() : Equipe
{
return $this->equipe;
}

public function setEquipe(Equipe $equipe)
{
$this->equipe = $equipe;

return $this;
}

public function __toString(){
    return $this->nom. " : " .$this->equipe;
}

}