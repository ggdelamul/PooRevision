<?php
namespace factorySpace;
use CouleurSpace\ICouleur;
use FormSpace\IForme;
/**
 * 
 * Cette classe abstraite doit contenir la methode qui servira à retourner la notre objet ici MakeForme qui retourne un objet de type IForme
 * L'attribut ListOfForme peut simuler un contexte de donnée permettant à la classe abstraite de récupérer l'intégralités des objets stockées en base de données 
 * 
 */
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