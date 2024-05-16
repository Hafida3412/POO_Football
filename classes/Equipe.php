<?php

class Equipe {

//attributs
private string $nom;
private DateTime $dateCreation;
private array $contrats;
private Pays $pays;



public function __construct(string $nom, string $dateCreation, Pays $pays){
    $this->nom = $nom;
    $this->dateCreation = new DateTime($dateCreation);
    $this->contrats = [];
    $this->pays = $pays;
    $this->pays->addEquipe($this);// on ajoute "Equipe" dans "Pays"
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

//Affichage des joueurs d'une équipe:
public function afficherJoueurs(){
    $result = "<div class='card'><h2> ". $this. "<br>".$this->getPays()."</h2><ul>"; //Rajout du pays
    foreach($this->contrats as $contrat){
    $result .= "<li>".$contrat->getJoueur()->getNom()." (". $contrat->getAnnee_debut_saison().")"."</li>";
    }
    $result .= "</ul></div>";

    return $result;
}

//Fonction __toString qui rapporte le nom de l'équipe + sa date de création:
public function __toString(){
    return $this->nom . "<br>" ." ("."créé en".$this->dateCreation->format("Y").")";
}

}