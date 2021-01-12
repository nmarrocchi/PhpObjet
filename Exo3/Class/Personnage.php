<?php

class Personnage
{
    //Propriétés
        private $Pseudo;
        private $Vie;

    //Méthodes
        public function _construct($pseudo)
        {
            $this->Pseudo = $pseudo;
            $this->Vie = 100;

            echo "Je suis le personnage " .$this->Pseudo. " et j'ai " .$this->Vie. " points de vie.";
        }
        
}