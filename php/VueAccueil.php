<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    </head>
    <body>
    <?php 
    foreach ($streamers as $streamer)
    {
    ?>
    <p><?php echo $streamer['streamer_name'] ?></p>
    <?php
    }
    ?>
    <?php
    foreach ($domingo as $streamer)
    {
    ?>
    <p><?php echo gettype($streamer) ?></p>
    <?php
    }
    // <p><?php echo $domingo ?></p>
    </body>
</html>