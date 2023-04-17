<?php
class Personne {
    protected $Nom;
    protected $Prenom;
    protected $Age;
    public function __construct($row=null){
        if ($row!=null){
            $this-> Nom = $row ["Nom"];
            $this->Prenom = $row ["Prénom"];
            $this->Age = $row ["Age"];
         }
    }
        //getters et setters
    public function getnom(){
        return $this-> $Nom;
    }
    public function getprenom(){
        return $this-> $Prenom;
    }public function getage($Age){
        $this-> age= $Age;
   }

   
   public function setnom($Nom){
       $this-> nom=$Nom;
   }
   public function setprenom(){
    return $this-> $Prenom;
   }
    public function setage(){
        return $this-> $Age;
    }


}


