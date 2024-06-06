<?php 
namespace FormSpace;

//require 'Entite/Forme/Forme.php';
use DateTime;
use CouleurSpace\ICouleur;
class Rond implements IForme
{
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
    
    public function calculerPerimetre():string
    {
        return "perimetre Rond calculé ";
    }
    public function calculerAire(): string
    {
        return "aire Rond calculé  ";
    }
}
