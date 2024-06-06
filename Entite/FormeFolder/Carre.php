<?php 
namespace FormSpace;
//require 'Entite/Forme/Forme.php';
use DateTime;
use CouleurSpace\ICouleur;

class Carre extends Forme

{

    public function __construct(int $nbCote, ICouleur $couleur, DateTime $dateCreation)
    {
        parent::__construct($nbCote, $couleur, $dateCreation);
    }
    
    public function calculerPerimetre():string
    {
        return "perimetre calculé ";
    }
    public function calculerAire(): string
    {
        return "aire calculé  ";
    }
}
