<?php
namespace factorySpace;
use FormSpace\Carre;
use CouleurSpace\ICouleur;
use DateTime;
/**
 * Cette classe étend la classse abstraite Factory. 
 * Elle hérite donc des attributs static nbInstanceOfForme et $ListOfForme ainsi que de la méthode static addFormOnList qui permet d'ajouter une forme dans $ListOfForme
 * LA MISSION DE CETTE CLASSE CONCRETE est de retournée un objet de type forme , pour cela dans l'implémentation de la méthode MakeForme On fait une boucle dans $ListOfForme pour rechercher si le modèle existe déjà ici dans le tableau si oui elle nous le retourne sinon elle en crée un nouveau.
 */

class FactoryFormeCarre extends FactoryForm
{
    public function MakeForme(int $id, int $nbCote, ICouleur $couleur, DateTime $dateCreation ):Carre
    {
        //Ici on teste les objet de $ListOfForme sur l attribut id de la forme
        foreach (self::$ListOfForme as $forme) {
            if ($forme->Id === $id) {
                return $forme;
            }
        }
        //Si l'instance recherché n'est pas présente la méthode en crée une nouvelle forme et l'ajoute à la liste d'objet 
        $forme = new Carre($id, $nbCote, $couleur, $dateCreation);
        self::addFormOnList($forme);
        return $forme;
    }
}