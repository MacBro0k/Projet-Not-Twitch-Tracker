<?php

function getAllStreamers() {
    $db = new PDO("mysql:host=localhost;dbname=twitch_tracker", 'root', ''); // Initialisation de la connexion à la base
    $req = $db->prepare('SELECT id AS streamer_id, name AS streamer_name FROM streamers');
    $req->execute();
    $streamers = $req->fetchAll(PDO::FETCH_ASSOC);
    sendJSON($streamers);
}

function getStreamerByName($search_name) {
    $db = new PDO("mysql:host=localhost;dbname=twitch_tracker", 'root', ''); // Initialisation de la connexion à la base
    $req = $db->prepare('SELECT id AS streamer_id, name AS streamer_name FROM streamers WHERE name = :search_name');
    $req->bindValue(":search_name", $search_name, PDO::PARAM_STR);
    $req->execute();
    $streamer = $req->fetchAll(PDO::FETCH_ASSOC);
    sendJSON($streamer);
}

function sendJSON($infos) { // Affiche les résultats au format JSON
    echo json_encode($infos, JSON_UNESCAPED_UNICODE);
}