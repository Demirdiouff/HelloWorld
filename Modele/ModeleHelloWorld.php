<?php

// ------------- Modèle (accès aux données) ----------------//

class ModeleHelloWorld {
    
    private $bdd;
    
    public function getBdd() 
    {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO('mysql:host=localhost;dbname=HelloWorld;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
        }
        return $this->bdd;
    }
    
    public function getTitre() 
    {
        $bdd = $this->getBdd();
        $titre = $bdd->prepare('SELECT titre FROM hello');
        return $titre;
    }
}