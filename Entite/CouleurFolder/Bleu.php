<?php
namespace CouleurSpace;
//require 'Entite/CouleurFolder/Couleur.php';
class Bleu implements ICouleur
{

    public string $id;

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