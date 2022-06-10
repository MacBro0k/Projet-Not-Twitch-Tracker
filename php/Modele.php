<?php

function db_connect($host, $name, $user, $pass) {
    // $host = 'localhost'; // Adresse de la base de données
    // $name = 'twitch_tracker'; // Nom de la base de données à utiliser
    // $user = 'root'; // Utilisateur de la base de données
    // $pass = ''; // Mot de passe de la base de données
    $db = new PDO("mysql:host=$host;dbname=$name", $user, $pass); // Initialisation de la connexion à la base
    return $db;
}

function getAllStreamers($db) {
    $streamers = $db->query('SELECT id AS streamer_id, name AS streamer_name FROM streamers');
    return $streamers;
}

function getStreamerByName($db, $search_name) {
    $streamer = $db->prepare('SELECT id AS streamer_id, name AS streamer_name FROM streamers WHERE name LIKE :search_name');
    $streamer->bindParam('search_name', $search_name);
    $streamer->execute();
    $streamer->fetch();
    return $streamer;
}