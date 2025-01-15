<?php

class Entreprise {
    // Intilisation des attributs de la classe entreprise 
    private string $raisonSociale; 
    private DateTime $dateCreation;
    private string $adresse;
    private string $cp;
    private string $ville;
    // private array $employes; 
    // la classe entreprise ne possède pas de tableau d'employés, mais un tableau de contrats 
    private array $contrats;

    public function __construct( string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville){
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        // $this->employes=[];
        $this->contrats=[];
    }

    public function getRaisonSociale():string{
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale){
        $this->raisonSociale = $raisonSociale;
    }

    public function getDateCreation(): DateTime{
        return $this->dateCreation;
    }

    public function setDateCreation(string $dateCreation){
        $this->dateCreation = $dateCreation;
    }

    public function getAdresse():string{
        return $this->adresse;
    }

    public function setAdresse(string $adresse){
        $this->adresse=$adresse;
    }

    public function getCp():string{
        return $this->cp;
    }

    public function setCp(string $cp){
        $this->cp=$cp;
    }

    public function getVille():string{
        return $this->ville;
    }

    public function setVille(string $ville){
        $this->ville=$ville;
    }

    public function getAdresseComplet(){
        return $this->adresse." ".$this->cp." ".$this->ville;
    }

    public function getInfo(){
        return $this->getRaisonSociale()." a été créé le ".$this->getDateCreation()->format("d-m-y")." et se trouve à l'adresse : ".$this->getAdresse()." ".$this->getCp()." ".$this->getVille();
    }

    // public function getEmployes(){
    //     return $this->employes;
    // }

    // public function setEmployes($employes){
    //     $this->employes=$employes;
    // }

    // public function addEmploye(Employe $employe){
    //     $this->employes[]=$employe;
    //     // CECI EST EGAL A : array_push($this->employes,$employe);
    // }

    // public function afficherEmployes(){
    //     $result = "<h1>Employés de $this</h1><ul>";

    //     foreach($this->employes as $employe){
    //         $result.="<li>$employe</li>";
    //     }
    //     $result.="</ul>";
    //     return $result;
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

    public function afficherEmployes(){
        $result="<h2>Employés de $this</h2>";

        foreach($this->contrats as $contrat){
            $result.= $contrat->getEmploye()." (".$contrat->getDateEmbauche().")"."<br>";
        }
        return $result;
    }

    public function __toString(){
        return $this->raisonSociale." (".$this->dateCreation->format('Y').")";
    }
}



//Datetime est une classe native de PHP - voir documentation 

