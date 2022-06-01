<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    </head>
    <body>
    <?php 
    foreach ($streamers as $streamer) {
    ?>
    <p><?php echo $streamer['streamer_name'] ?></p>
    <?php
    }
    ?>
    <p><?php echo $streamerByName[0]['streamer_name']?></p>
    </body>
</html>