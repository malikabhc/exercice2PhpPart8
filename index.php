<?php
session_start(); // On démarre la session en premier
$_SESSION['lastname'] = 'Dupond';
$_SESSION['firstname'] = 'Jean';
$_SESSION['age'] = 23;
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <meta charset="utf-8" />
        <title>Exercice 2/8</title>
    </head>
    <body>
        <a href="user.php">Page User</a>
    </body>
</html>
