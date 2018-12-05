<?php

// Point d'arrivée de la page : index.php
// Cette page renvoi automatiquement à la page routeur.php
// qui lui derrière est le cerveau principal, selon le choix du visiteur
// il ouvrira la page en question 

require 'Controleur/Routeur.php'; 

$routeur = new Routeur();
$routeur->routerRequete();