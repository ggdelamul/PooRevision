<?php
namespace factorySpace;
use FormSpace\Carre;
use CouleurSpace\ICouleur;
use DateTime;


class FactoryFormeCarre extends FactoryForm
{
    public function MakeForme(int $id, int $nbCote, ICouleur $couleur, DateTime $dateCreation ):Carre
    {
        foreach (self::$ListOfForme as $forme) {
            if ($forme->Id === $id) {
                return $forme;
            }
        }
        
        $forme = new Carre($id, $nbCote, $couleur, $dateCreation);
        self::addFormOnList($forme);
        return $forme;
    }
}