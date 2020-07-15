<?php

class Pantalons extends Vetements
{
    public $taille;

    public function __construct( $prix,$disponibilite,$taille)
    {
        parent::__construct($prix,$disponibilite);
        $this->taille = $taille;
    }
 
}