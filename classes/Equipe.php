<?php

class Equipe {

//attributs
private string $nom;
private DateTime $dateCreation;
private array $contrats;


public function __construct(string $nom, string $dateCreation){
    $this->nom = $nom;
    $this->dateCreation = new DateTime($dateCreation);
    $this->contrats = [];
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

/*public function getJoueurs()
{
    return $this->joueurs;
}

public function setJoueurs($joueurs)
{
    $this->joueurs = $joueurs;
    
    return $this;
}

/*on rajoute un joueur dans l'équipe
public function addJoueur(Joueur $joueur){
    $this->joueurs[] = $joueur;
//ça équivaut à: array_push($this->joueurs, $ joueur);
}

//Tableau pour afficher les joueurs de l'équipe:
public function afficherJoueurs(){
    $result = "<h2> Joueurs de $this</h2><ul>";
    foreach($this->joueurs as $joueur){
        $age = date_diff(new DateTime(), $joueur->getDateNaissance())->y;// -> CALCUL AGE DU JOUEUR
            $result .= "<li>".$joueur->getNom()." ".$joueur->getPrenom()." - ".$age." ans</li>";
    }
    $result .= "</ul>";

    return $result;
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

//Affichage des joueurs d'une équipe:
public function afficherJoueurs(){
    $result = "<h2> Joueurs de $this</h2><ul>";
    foreach($this->contrats as $contrat){
    $result .= "<li>".$contrat->getJoueur()." (". $contrat->getAnnee_debut_saison().")"."</li>";
    }
    $result .= "</ul>";

    return $result;
}

public function __toString(){
    return $this->nom . " (".$this->dateCreation->format("Y").")";
}
}