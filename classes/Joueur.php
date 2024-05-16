<?php

class Joueur {

//attributs
private string $nom;
private string $prenom;
private DateTime $dateNaissance;
private array $contrats;

public function __construct(string $nom, string $prenom, string $dateNaissance){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = new DateTime($dateNaissance);
    $this->contrats = [];
 
    /*$this->equipe->addJoueur($this);/*à chaque fois que je vais créer un joueur,
il va se rajouter dans l'équipe*/   
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

/*public function getEquipe(): Equipe
{
    return $this->equipe;
}

public function setEquipe(Equipe $equipe)
{
    $this->equipe = $equipe;
    
    return $this;
}*/

/*public function getInfos(){
    return $this. " joue dans l'équipe " . $this->equipe->getNom();
}*/

public function getContrats()
{
    return $this->contrats;
}
public function setContrats($contrats)
{
    $this->contrats = $contrats;
    
    return $this;
}

public function addContrat(Contrat $contrat){
    $this->contrats[] = $contrat;
}
public function __toString(){
    return $this->nom."  ".$this->prenom . ": ". $age = date_diff(new DateTime(), $this->getDateNaissance())->y. "ans.";
}

}
