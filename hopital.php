<?php

class Utilisateur { // Renamed the base class from "user" to "Utilisateur"

    public $nom;
    public $prenom;
    public $type_utilisateur;

    public function __construct($nom = null, $prenom = null, $type_utilisateur = null) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type_utilisateur = $type_utilisateur;
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

class Patient extends Utilisateur {
    public $rendez_vous = []; 

    public function prendreRendezVous($date, $medecin) {
        $this->rendez_vous[] = [
            'date' => $date,
            'medecin' => $medecin
        ];
    }

    public function afficherRendezVous() {
        foreach ($this->rendez_vous as $rdv) {
            echo "Rendez-vous avec Dr. " . $rdv['medecin'] . " le " . $rdv['date'] . "\n";
        }
    }
}

class Medecin extends Utilisateur {
    public $specialite;

    public function __construct($nom, $prenom, $specialite, $type_utilisateur = "Medecin") {
        parent::__construct($nom, $prenom, $type_utilisateur);
        $this->specialite = $specialite;
    }

    public function consulterPatient($patient) {
        echo "Le médecin " . $this->afficherNomComplet() . " consulte " . $patient->afficherNomComplet() . ".\n";
    }
}

$medecin = new Medecin("Dupont", "Jean", "Cardiologie");

$patient = new Patient("Doe", "John");

$patient->prendreRendezVous("2024-12-25", $medecin->afficherNomComplet());

echo "Liste des rendez-vous pour " . $patient->afficherNomComplet() . ":\n";
$patient->afficherRendezVous();

$medecin->consulterPatient($patient);

?>
