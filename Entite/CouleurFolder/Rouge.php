<?php
namespace CouleurSpace;
//require 'Entite/CouleurFolder/Couleur.php';
class Rouge implements ICouleur
{

    public int $id;

    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function ReglerOpacite():string
    {
       
        return "Opacité réglé ";
    }
    public function ReglerNiveauDeGris():string
    {
        return "Niveau de gris réglé ";
    }
}