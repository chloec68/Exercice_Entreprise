<?php

class Contrat{
    private Entreprise $entreprise;
    private Employe $employe;
    private DateTime $dateEmbauche;

    public function __construct(Entreprise $entreprise, Employe $employe, string $dateEmbauche){
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