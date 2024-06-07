<?php
require 'Entite/CouleurFolder/Couleur.php';
require 'Entite/CouleurFolder/Rouge.php';
require 'Entite/CouleurFolder/Vert.php';
require 'Entite/CouleurFolder/Bleu.php';
require 'Entite/FormeFolder/IForme.php';
require 'Entite/FormeFolder/Carre.php';
require 'Entite/FormeFolder/Rectangle.php';
require 'Entite/FormeFolder/Rond.php';
/******************************première partie de l'exercice****************** ******************************************************************************/
use CouleurSpace\{ICouleur, Rouge, Vert, Bleu};
use FormSpace\{IForme, Carre, Rectangle, Rond};

$forme1 = new Carre(123,4, new Rouge("mon rouge"), new DateTime());
echo $forme1->calculerPerimetre(); 
echo '<br>';
echo $forme1->calculerAire(); 
echo '<br>';
echo $forme1->couleur->ReglerNiveauDeGris();
echo '<br>';
echo "creation de la forme ". $forme1->dateCreation->format('Y-m-d H:i:s');


