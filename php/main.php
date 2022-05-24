<?php
// Include db
include __DIR__ . '/../php/database.php';

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    </head>
    <body>
    <?php $recipeStatement = $dbh->prepare('SELECT * FROM streamers');
    $recipeStatement->execute();
    $streamers = $recipeStatement->fetchAll();

    foreach ($streamers as $streamer) {
    ?>
    <p><?php echo $streamer['name'] ?></p>
    <?php
    }
    ?>
    </body>
</html>