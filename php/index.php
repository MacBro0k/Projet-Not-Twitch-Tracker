<?php

require 'Modele.php';

$streamers = getAllStreamers();

$streamerByName = getStreamerByName('KAMETO');

require 'VueAccueil.php';
