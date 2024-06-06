<?php
namespace CouleurSpace;
//require 'Entite/CouleurFolder/Couleur.php';
class Vert implements ICouleur
{

    public int $id;

    public string $nom;

    public function ReglerOpacite():string
    {     
        return "Opacité réglé ";
    }
    public function ReglerNiveauDeGris():string
    {
        return "Niveau de gris réglé ";
    }
}