<?php

class Chaussures extends Vetements
{
    public $pointures;

    public function __construct( $prix,$disponibilite,$pointures)
    {
        parent::__construct($prix,$disponibilite);
        $this->pointures = $pointures;
    }
}