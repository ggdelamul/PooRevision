<?php
namespace FactorySpace;
use DateTime;
use FormSpace\IForme;
use CouleurSpace\ICouleur;
abstract class Factory 
{
    public static array $ListOfForm;

    abstract public function returnObject(int $id, int $nbCote, 
    ICouleur $couleur, DateTime $date):IForme;
}