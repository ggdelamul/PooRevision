<?php
namespace factorySpace;
use CouleurSpace\ICouleur;
use FormSpace\IForme;

abstract class FactoryForm
{
    public static int $nbInstanceOfForme = 0 ;
    public static array $ListOfForme = [];

    public static function addFormOnList(IForme $forme):void
    {
        array_push(self::$ListOfForme, $forme);
        self:: $nbInstanceOfForme = count(self::$ListOfForme);
    }

    abstract public function MakeForme(int $id,int $nbCote, ICouleur $couleur, \DateTime $dateCreation):IForme; 

}