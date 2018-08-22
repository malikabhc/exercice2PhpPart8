<?php
   session_start(); // On démarre la session en premier
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <title>User2/8</title>
    </head>
    <body>
        <p>
        <?= 'Je suis toujours' . ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' ' . $_SESSION['age'] ?>
        </p>
    </body>
</html>

