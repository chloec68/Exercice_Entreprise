<h1>POO Entreprise</h1>

<?php

//manuellement : 
// require "Entreprise.php";
// require "Employe.php";
// le problème est lorsque les classes sont nombreuses

//automatiquement : 
// AUTO-LOADER DE CLASS (cf Manual): 

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$elanFormation = new Entreprise("ELAN FORMATION","1993-01-01","14 rue du Rhône","67180","STRASBOURG");
$franceTravail = new Entreprise("FRANCE TRAVAIL","2000-02-03","1, rue de Paris","68000","COLMAR");
$tf1 = new Entreprise("TF1","1989-07-01","3 boulevard des Champs Elysées","75000","PARIS");

// echo $elanFormation->getRaisonsociale()." a été créé le ".$elanFormation->getDateCreation()->format("d.m.Y");
// echo "<br>";
// echo $elanFormation->getRaisonsociale()." a été créé le ".$elanFormation->getDateCreation()->format("D.M.y");
// echo "<br>";
// echo $elanFormation->getRaisonsociale()." a été créé le ".$elanFormation->getDateCreation()->format("d-m-y")." et se trouve à l'adresse : ".$elanFormation->getAdresse()." ".$elanFormation->getCp()." ".$elanFormation->getVille();

// // Cette techniquee est trop fastidieuse, donc on crée une fonction dans Entreprise
// echo"<br>";
// echo $elanFormation->getAdresseComplet();
// echo"<br>";
// echo$elanFormation;//affiche la raiosn sociale, ce qui n'était pas le cas avant car il s'agit d'un objet (ici transformé en chaîne de caractères
// //en raison de la function __tooString();)
// echo"<br>";
// echo $elanFormation->getInfo();
// echo"<br>";

$stephane=new Employe('SMAIL','Stéphane','abc@email.fr');
$pascal = new Employe('DIETRICH','Pascal','efg@gmaill.com');

// echo $stephane->getNom();
// echo "<br>";
// echo $stephane->getInfo();
// echo"<br>";
// var_dump($stephane);
// echo "<br>";
// echo $stephane->getInfo();

// $tf1 = new Entreprise("TF1","1970-01-01","3 rue de la Seine","75000","PARIS");

// echo "<br>";

// echo $stephane->setEntreprise($tf1);
// echo"<br>";
// echo $stephane->getInfo();
// echo"<br>";
// // var_dump($elanFormation);
// "<br>";
// "<br>";
// "<br>";

$contrat1 = new Contrat($elanFormation,$stephane,"2020-01-01");
$contrat2 = new Contrat($elanFormation,$pascal,"2010-01-01");
$contrat3 = new Contrat($tf1, $stephane,"2022-01-01");
$contrat4 = new Contrat($franceTravail,$stephane,"2003-01-01");

echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();
echo $franceTravail->afficherEmployes();

echo $stephane->afficherEntreprises();
echo $pascal->afficherEntreprises();