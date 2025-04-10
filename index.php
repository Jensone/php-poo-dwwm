<?php

require_once 'Utilisateur.php';

$tom = new Utilisateur(); // Instance de la classe Utilisateur
$tom
    ->setNom('Tom') // Nom de l'utilisateur
    ->setEmail('tom@gmail.com') // Email de l'utilisateur
    ->setIdentifiant(uniqid('USR-')) // Identifiant généré aléatoirement
    ->setDateInscription(new DateTime('now')) // Date du jour
;

$tomId = $tom->getNomDateInscription();

$martin = new Utilisateur();

var_dump($tom);