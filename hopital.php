<?php

class user {


    public $nom;
    public $prenom;
    public  $type_utilisateur;


    public function __construct($nom = null, $prenom = null, $type_utilisateur = null){

        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> type_utilisateur = $type_utilisateur;
    

    }
    
    public function afficherNomComplet() {
        return $this->prenom . " " . $this->nom;
    }

    
    public function changerNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }


    public function changerPrenom($nouveauPrenom) {
        $this->prenom = $nouveauPrenom;
    }

}


$name = new user("Abdellah","EL MALKY");


var_dump($name);


echo 'it works';


?>