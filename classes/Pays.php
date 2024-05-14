<?php

class Pays {

//attributs
private string $nom;

public function __construct (string $nom) {
    $this->nom = $nom;
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

public function __toString(){
    return $this->nom;
}
}