<?php

class VueHelloWorld {
    
    private $fichier; 
    
    private $nom;
    
    public function __construct($action) 
    {
        $this->fichier = "Vue/vue" . $action . ".php";
    }
    
    // Génère et affiche la vue
    public function generer($donnees)
    {
        // génération du gabarit commun utilisant la partie spécifique
        $table = array('nom' => $this->nom);
        
        $vue = $this->genererFichier('Vue/template.php', array ('nom' => $this->nom));
        
        // Renvoi de la vue au navigateur
        echo $vue;
    }
    
    private function genererFichier($fichier, $donnees) {
        if (file_exists($fichier)) {
            // rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);
            // Démarrage de la temporisation de sortie
            ob_start();
            // inclut le fichier vue
            // son résultat est placé dans le tampon de sortie
            require $fichier;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            $contenu = ob_get_clean();
            
            return $contenu;
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }
}