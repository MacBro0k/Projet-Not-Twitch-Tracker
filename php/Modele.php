<?php

function getAllStreamers() {
    $host = 'localhost'; // Adresse de la base de données
    $name = 'twitch_tracker'; // Nom de la base de données à utiliser
    $user = 'root'; // Utilisateur de la base de données
    $pass = ''; // Mot de passe de la base de données
    $db = new PDO("mysql:host=$host;dbname=$name", $user, $pass); // Initialisation de la connexion à la base
    $streamers = $db->query('SELECT id AS streamer_id, name AS streamer_name FROM streamers');
    return $streamers;
}