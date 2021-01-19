<?php

class Personnage
{
    //Propriétés
        private $id;
        private $Pseudo;

    //Méthodes
        public function _construct($pseudo,$id)
        {
            $this->id = $id
            $this->Pseudo = $pseudo;
        }

        public function AffichePseudo($id)
        {
            echo "<p> Mon nom est : </p> $this->Pseudo .";
        }
        
}