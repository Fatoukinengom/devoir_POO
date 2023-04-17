<?php
    class Employe {
    public $Nom;
    public $Prenom;
    public $Age;
    public $Salaire;

    public function __construct($Nom, $Prenom, $Age, $Salaire) {
    $this->nom = $Nom;
    $this->prenom = $Prenom;
    $this->age = $Age;
    $this->salaire = $Salaire;
    }
}

$personne1 = new Employe('Ngom', 'Kiné', 19, 1900000000); 
var_dump($personne1);
$fullname= $personne1->Nom. " " .$personne1->Prenom. " " .$personne1->Age. " " .$personne1->salaire;
echo $fullname;

$personne2 = new Employe('Ndiaye', 'Fabi', 21, 233000000); 
var_dump($personne2);
$fullname= $personne2->Nom. " " .$personne2->Prenom. " " .$personne2->Age. " " .$personne2->salaire;
echo $fullname;
?>
