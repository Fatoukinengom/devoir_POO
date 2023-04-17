<?php
class Personne {
    public $Nom;
    public $Prenom;
    public $Age;

    public function __construct($Nom, $Prenom, $Age){
        $this->nom = $Nom;
        $this->prenom = $Prenom;
        $this->age = $Age;
    }
}


$personne1 = new Personne('Ngom', 'Kiné', 19);
var_dump($personne1);
$fullname= $personne1->Nom. " " .$personne1->Prenom. " " .$personne1->Age;
echo $fullname;


$personne2 = new Personne('Ndiaye', 'Fabi', 21);
var_dump($personne2);
$fullname= $personne2->Nom. " " .$personne2->Prenom. " " .$personne2->Age;
echo $fullname;
?>



   