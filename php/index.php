<?php

require 'Modele.php';

$db = db_connect('localhost', 'twitch_tracker', 'root', '');

$streamers = getAllStreamers($db);

$domingo = getStreamerByName($db, 'DOMINGO');

require 'VueAccueil.php';
