<?php

// ------------- Contrôleur (point d'entrée unique au site, va centraliser la gestion des requêtes entrantes et afficher les vues en question selon la demande) ----------------//

require_once 'Controleur/ControleurHelloWorld.php';
require_once 'Vue/vueHelloWorld.php';

class Routeur {
    
    private $ctrlAccueil;
    
    public function __construct()
    {
        
    }
    
    // Traite une requête entrante
    public function routerRequete()
    {
        try {
            $action = 'Accueil';
            if (isset($_GET['action'])) {
                $action = $_GET['Action'];
            }
            $this->ctrlAccueil = new ControleurHelloWorld();
            $this->ctrlAccueil->accueil();
        }
        catch (Exception $e) {
            'Problème survenu :' . $e->getMessage() . "\n";
            
        }
    }
    
    
    
}