<?php
    

class personne{

    private $nom;
    private $prenom;
    private $age;
    private $ville;

    //constructeur avec parametre $nom,$prenom,$age,$ville
    public function __construct() {
        // $this->nom = $nom. '<br>';
        // $this->prenom = $prenom. '<br>';
        // $this->age = $age. '<br>';
        // $this->ville = $ville. '<br>';
    }

    public function __destruct(){
        // echo "Hello {$this->nom}";
    }

    //Get
    function getNom(){
        return $this->nom;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function getAge(){
        return $this->age;
    }

    function getVille(){
        return $this->ville;
    }

    //Set
    function setNom($nom) {
        $this->nom = $nom. '<br>';
    }

    function setPreom($prenom) {
        $this->prenom = $prenom. '<br>';
    }

    function setAge($age) {
        $this->age = $age. '<br>';
    }

    function setVille($ville) {
        $this->ville = $ville. '<br>';
    }

    //Display info
    function __toString()
    {
        return $this->nom." ".$this->prenom." ".$this->age." ".$this->ville;
    }

    //methode age
    function age(){
        if($this->age > 18){
            echo "Agé";
        }
        else{
            echo "mineur";
        }
    }

}


?>