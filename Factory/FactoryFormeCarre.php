<?php
namespace FactorySpace;

use DateTime;
use FormSpace\{IForme, Carre};
use CouleurSpace\ICouleur;
class FactoryFormeCarre extends Factory
{
    public function returnObject(int $id, int $nbCote, 
    ICouleur $couleur, DateTime $date): IForme
    {
        return new Carre($id, $nbCote, $couleur, $date);
    }
}