<?php

class Contrat{
    private Equipe $equipe;
    private Joueur $joueur;
    private DateTime $annee_debut_saison;

public function __construct(Equipe $equipe, Joueur $joueur, string $annee_debut_saison){
    $this->equipe = $equipe;
    $this->joueur = $joueur;
    $this->annee_debut_saison = new DateTime($annee_debut_saison);
    $this->equipe->addContrat($this);// le contrat va s'ajouter dans "Equipe"
    $this->joueur->addContrat($this);// et dans "Joueur"
}

    public function getEquipe()
    {
        return $this->equipe;
    }

    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function getAnnee_debut_saison()
    {
        return $this->annee_debut_saison->format("Y");
    }

    public function setAnnee_debut_saison($annee_debut_saison)
    {
        $this->annee_debut_saison = $annee_debut_saison;

        return $this;
    }
}