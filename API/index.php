<?php
//www.monsite.fr/streamers
//www.monsite.fr/streamer/:id

try {
    if (!empty($_GET['demande'])) {
        echo "test";
    } else
        throw new Exception("Problème de récuperation de données.");
} catch (Exception $e) {
    $erreur =[
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];
    print_r($erreur);
}