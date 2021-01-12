<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Objet Exo 4</title>
</head>
<body>
<?php
include "Class/Personnage.php";
$Personnage1 = new Personnage();
$Personnage1->_construct('Personnage1');

$Personnage2 = new Personnage();
$Personnage2->_construct('Personnage2');

$Personnage1->Attaquer($Personnage2);

?>
    
</body>
</html>