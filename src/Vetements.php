<?php

class Vetements
{
    public $prix;

    public $disponibilite;

    public function __construct( $prix,$disponibilite)
   {
       $this->prix = $prix;
       $this->disponibilite = $disponibilite;
   }

}