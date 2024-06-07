<?php 
namespace FormSpace;
//require 'Entite/Forme/Forme.php';
use DateTime;
use CouleurSpace\ICouleur;
class Carre implements IForme

{
    public int $Id;
    public int $nbCote; 
    public ICouleur $couleur;
    public DateTime $dateCreation;
    public function __construct(int $id,  int $nbCote, ICouleur $couleur, DateTime $dateCreation )
    {
        $this->Id=$id;
        $this->nbCote= $nbCote;
        $this-> couleur = $couleur; 
        $this -> dateCreation= $dateCreation; 
    }
    
    public function calculerPerimetre():string
    {
        return "perimetre Carre calculé ";
    }
    public function calculerAire(): string
    {
        return "aire Carre calculé  ";
    }
}
