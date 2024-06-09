<?php
require 'Entite/CouleurFolder/Couleur.php';
require 'Entite/CouleurFolder/Rouge.php';
require 'Entite/CouleurFolder/Vert.php';
require 'Entite/CouleurFolder/Bleu.php';
require 'Entite/FormeFolder/IForme.php';
require 'Entite/FormeFolder/Carre.php';
require 'Entite/FormeFolder/Rectangle.php';
require 'Entite/FormeFolder/Rond.php';
require 'Factory/Factory.php';
require 'Factory/FactoryFormCarre.php';
/******************************première partie de l'exercice****************** ******************************************************************************/
use CouleurSpace\{ICouleur, Rouge, Vert, Bleu};
use FormSpace\{IForme, Carre, Rectangle, Rond};
use factorySpace\{FactoryForm, FactoryFormeCarre};
// $forme1 = new Carre(4, new Rouge("mon rouge"), new DateTime());
// echo $forme1->calculerPerimetre(); 
// echo '<br>';
// echo $forme1->calculerAire(); 
// echo '<br>';
// echo $forme1->couleur->ReglerNiveauDeGris();
// echo '<br>';
// echo "creation de la forme ". $forme1->dateCreation->format('Y-m-d H:i:s');

/****************************************************************************
 * **************************************************************************
 *****************************************************************************/





$factory = new FactoryFormeCarre();
$forme2 =  $factory->MakeForme(123,4, new Vert("mon vert"), new DateTime());
echo $forme2->calculerPerimetre(); 
echo '<br>';
echo $forme2->calculerAire(); 
echo '<br>';
echo $forme2->couleur->ReglerNiveauDeGris();
echo '<br>';
echo "date creation de la forme depuis factory". $forme2->dateCreation->format('Y-m-d H:i:s');
echo '<br>';
echo "nb de forme déjà crée :". FactoryForm::$nbInstanceOfForme;
echo '<pre>';
var_dump(FactoryForm::$ListOfForme);
echo '</pre>';
echo '<br>';
$forme3 = $factory-> MakeForme(456,4 ,new Bleu("mon bleu"), new DateTime());
echo '<pre>';
var_dump(FactoryForm::$ListOfForme);
echo '</pre>';

echo "CI APRES RECHERCHE D UN OBJET DEJA CREE ET RETOUR";
$forme4 = $factory->MakeForme(123,4, new Vert("mon vert"), new DateTime());
echo '<pre>';
var_dump(FactoryForm::$ListOfForme);
echo '</pre>';


echo '<hr>';
 

var_dump($forme4);







