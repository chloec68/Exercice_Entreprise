
En MLD, une table = un objet en POO ; 

Les clés étrangères de la table deviennent en POO des objets dans la classe ; 

En MLD, une table associative est une table qui a pour clés étrangères les clés primaires des tables qu'elle relie ;

En MLD, en présence d'une table associative => ce qui est possible uniquement lorsque la cardinalité est (1 ou 0,n) - (1 ou 0,n) MANY - TO - MANY- la table asociative devient une classe en PHP ; 

Il est possible d'ajouter des champs dans une table associative ; En POO, les attributs de la table associative sont des objets dnas la classe ; 

En MLD, pour comprendre s'il faut ajouter le champ à la table reliée ou à la table associative : 
=> dès lors qu'un attribut est présent dans une classe, il participe de la création de l'objet
=> par exemple, une BDD d'un e-commerce avec une entité commande et une entité produit ; la quantité de produits commandés (c'est à dire l'ELEMENT VARIABLE d'un produit à l'autre) se loge 
dans l'association qui unit la table commande et la table produit 
=> la table associative (par exemple panier, va donc conteir id_commande, id_produit, ainsi que qté) 
= Pourquoi ? Si on met le champ quantité dans produit, cela signifie que le produit devra toujours être commandé X fois, ce qui n'a pas de sens ; 

En MLD, si clé étrangère dans une table = attribut Objet dans la classe en POO
En MLD, si table associative entre deux tables liées = chaque table liée contiennent une collection d'objets (= un tableau INDEXE standard - où les éléments sont stockés 
sous des indices numériques automatiques commençant à 0) ;  


class Groupe {
    private $nom;
    private $membres; // Cet attribut sera un tableau

    // Le constructeur (appelé automatiquement lors de l'initialisation d'un objet) initialise les attributs
    public function __construct($nom) {
        $this->nom = $nom;        // Initialisation du nom du groupe
        $this->membres = [];      // Initialisation de 'membres' comme un tableau vide
    }

    // Méthode pour ajouter un membre
    public function ajouterMembre($membre) {
        $this->membres[] = $membre;  // On ajoute un membre à la collection 'membres'
    }

    public function afficherMembres() {
        echo "Membres de " . $this->nom . ": " . implode(", ", $this->membres);
    }
}

// Instanciation de l'objet Groupe
$groupe = new Groupe("Les Amis");
$groupe->ajouterMembre("Alice");
$groupe->ajouterMembre("Bob");
$groupe->afficherMembres(); // Affiche "Membres de Les Amis: Alice, Bob"




class Groupe {
    private $nom;
    private $membres;

    // Le constructeur prend un tableau de membres en argument
    public function __construct($nom, $membres) {
        $this->nom = $nom;
        $this->membres = $membres;  // Le tableau passé en argument est assigné à l'attribut
    }

    public function afficherMembres() {
        echo "Membres de " . $this->nom . ": " . implode(", ", $this->membres);
    }
}

// Instanciation avec un tableau de membres
$groupe = new Groupe("Les Amis", ["Alice", "Bob"]);
$groupe->afficherMembres(); // Affiche "Membres de Les Amis: Alice, Bob"