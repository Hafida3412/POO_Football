<?php

class Joueur {

//attributs
private string $nom;
private string $prenom;
private DateTime $dateNaissance;
private array $contrats;
private Pays $pays;

public function __construct(string $nom, string $prenom, string $dateNaissance, Pays $pays){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = new DateTime($dateNaissance);
    $this->contrats = [];
    $this->pays = $pays;
  
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

public function getContrats()
{
    return $this->contrats;
}
public function setContrats($contrats)
{
    $this->contrats = $contrats;
    
    return $this;
}
public function getPays()
{
    return $this->pays;
}

public function setPays($pays)
{
    $this->pays = $pays;
    
    return $this;
}

//Ajout de la méthode Contrat
public function addContrat(Contrat $contrat){
    $this->contrats[] = $contrat;

}

//Affichage des équipes d'un joueur
public function afficherEquipes(){
    $result = "<div class= 'card2'><h2> ". $this ."<br>". $this->getPays(). "</h2><ul>"; //Rajout du pays
    foreach($this->contrats as $contrat){
    $result .= "<li>".$contrat->getEquipe()->getNom()." (". $contrat->getAnnee_debut_saison().")"."</li>";
    }
    $result .= "</ul></div>";
    
    return $result;
}

//Fonction __tostring qui rapporte le nom, prénom et âge du joueur (inclus formule pour calculer l'âge)
public function __toString(){
    return $this->nom."  ".$this->prenom . "<br>". $age = date_diff(new DateTime(), $this->getDateNaissance())->y. "ans";
}

}