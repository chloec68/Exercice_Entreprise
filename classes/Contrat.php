<?php

// En MLD, Contrat est une table associative entre Employé et Entreprise
// En POO, Contrat est une classe qui permet de lier un employé à une entreprise à une date donnée
// Si en MLD, on a une clé étrangère dans une table, alors en POO on initialise un objet dans la classe 

// Cet entité nous apprend : que dans X entreprise, Y employé a été embauché à une date donnée 
class Contrat{
    private Entreprise $entreprise; // "le contrat concerne telle entreprise'
    private Employe $employe; // "le contrat concerne tel employé"
    private DateTime $dateEmbauche; // ELEMENT VARIABLE => si la date était placée dans Employé, il ne pourrait pas avoir plusieurs dates d'embauche et donc être embauché plusieurs fois ;

    public function __construct(Entreprise $entreprise, Employe $employe, string $dateEmbauche){ // On ne met pas de DateTime ici, on le fait dans le constructeur 
        // => date d'embauche est une chaîne de caractères qui devient un objet DateTime 
        $this->entreprise=$entreprise; 
        $this->employe=$employe;
        $this->dateEmbauche=new DateTime($dateEmbauche);
        $this->entreprise->addContrat($this);
        $this->employe->addContrat($this);
    }

    public function getEntreprise(){
        return $this->entreprise;
    }    

    public function setEntreprise($entreprise){
        $this->entreprise=$entreprise;
    }

    public function getEmploye(){
        return $this->employe;
    }

    public function setEmploye($employe){
        $this->employe=$employe;
    }

    public function getDateEmbauche(){
        return $this->dateEmbauche->format("d-m-Y");
    }

    public function setDateEmauche($dateEmbauche){
        $this->dateEmbauche=$dateEmbauche;
        return $this;
    }
}