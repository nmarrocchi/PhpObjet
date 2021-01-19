<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Objet Exo 5</title>
</head>
<body>
<?php

    $bdd = new PDO("mysql;host:192.168.65.60");

    include "Class/Personnage.php";
    $Personnage1 = new Personnage();
    $Personnage1->_construct('Personnage1');
    $Personnage1-> AffichePseudo();

    $Personnage2 = new Personnage();
    $Personnage2->_construct('Personnage2');
    $Personnage2-> AffichePseudo();

?>
    
</body>
</html>