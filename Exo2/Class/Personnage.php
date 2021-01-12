<?php

class Personnage
{
    //Propriétés
        private $Pseudo;
        private $Vie;

    //Méthodes
        public function _construct()
        {
            $this->Vie =100;
            echo $this->Vie;
        }
        
}