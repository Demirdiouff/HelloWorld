<?php 

require_once 'Modele/ModeleHelloWorld.php';
require_once 'Vue/vueHelloWorld.php';

class ControleurHelloWorld {
    
    private $titre;
    
    public function __construct() 
    {
        $this->titre = new ModeleHelloWorld ();
    }
    
    // Affiche le Hello World
    public function accueil()
    {
        $titre = $this->titre->getTitre();
        $vue = new vueHelloWorld("Accueil");
        $vue->generer(array('titre' => $titre)); 
    }
}