<?php

class Employe{

    private string $nom;
    private string $prenom;
    private string $email; 
   // private Entreprise $entreprise; Ce n'est plus valable parce que l'employé n'appartient plus à une seule entreprise
    //NB : entreprise n'est pas une chaîne de caractères, mais un OBJET (un objet de la classe Entreprise)
    private array $contrats;

    public function __construct(string $nom, string $prenom, string $email){//, Entreprise $entreprise){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        //$this->entreprise=$entreprise;
        //$this->entreprise->addEmploye($this);
        $this->contrats=[];
    }

    public function getNom():string{
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom=$nom;
        return $this;
    }

    public function getPrenom():string{
    return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom=$prenom;
        return $this;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setEmail($email){
        $this->email =$email;
    }

    // public function getInfo(){
    //     return $this->prenom." ".$this->nom." ".$this->email." travaille dans l'entreprise ".$this->entreprise;
    // }

    // public function getEntreprise():Entreprise{
    //     return $this->entreprise;
    // }

    // public function setEntreprise($entreprise){
    //     $this->entreprise=$entreprise;
    //     return $this; 
    // }

    public function getContrats(){
        return $this->contrats;
    }

    public function setContrats($contrats){
        $this->contrats=$contrats;
    }

    public function addContrat(Contrat $contrat){
        $this->contrats[]=$contrat;
    }

    public function afficherEntreprises(){
        $result="<h2>Entreprises de $this</h2>";

        foreach($this->contrats as $contrat){
            $result.= $contrat->getEntreprise()." (".$contrat->getDateEmbauche().")"."<br>";
        }
        return $result;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

}