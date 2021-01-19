<?php
//Création de la classe
class User
{
    //Propriétés

        private $Prenom;
        private $Nom;
        
    //Méthodes

        public function AfficheUser()
        {
            echo '<p>Je suis un User !</p>';
        }
}

$User = new User;
$User->AfficheUser();

?>