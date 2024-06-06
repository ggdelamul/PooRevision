<?php
namespace FormSpace;
use CouleurSpace\ICouleur;
use DateTime;

abstract class Forme {
    public int $Id;
    public int $nbCote; 
    public ICouleur $couleur;
    public DateTime $dateCreation;
    public function __construct( int $nbCote, ICouleur $couleur, DateTime $dateCreation )
    {
        $this->nbCote= $nbCote;
        $this-> couleur = $couleur; 
        $this -> dateCreation= $dateCreation; 
    }

    abstract public  function calculerPerimetre():string;
    abstract public  function calculerAire(): string;
}