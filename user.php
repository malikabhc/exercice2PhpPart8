<?php
   session_start(); // On démarre la session en premier
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>User2/8</title>
    </head>
    <body>
        <a href="index.php">home</a>
        <a href="exo2.php">exo2</a>
        <?php if (!empty($_SESSION['lastname'])) { ?>
            <p><?= $_SESSION['lastname']; ?></p>
        <?php } ?>
        <?php if (!empty($_SESSION['firstname'])) { ?>
            <p><?= $_SESSION['firstname']; ?></p>
        <?php } ?>
        <?php if (!empty($_SESSION['age'])) { ?>
            <p><?= $_SESSION['age']; ?></p>
        <?php } ?>
    </body>
</html>
