# Révision POO et Design Patterns en PHP

Ce projet sert de support de révision pour les concepts fondamentaux de la Programmation Orientée Objet (POO) et l'implémentation de Design Patterns en PHP moderne.

## Objectifs Pédagogiques

*   **POO Fondamentale & Avancée** : Manipulation de classes abstraites, interfaces, héritage, polymorphisme et typage fort.
*   **Design Patterns** : Mise en œuvre du pattern **Factory Method** couplé à une logique de gestion d'instances (type *Identity Map* ou Cache).
*   **Membres Statiques** : Compréhension de la portée `static` pour le partage de données entre instances.

## Structure du Projet

L'architecture sépare les entités métier de la logique de création :

*   **Entite/** : Les objets du domaine.
    *   `CouleurFolder/` : Implémentations des couleurs (`ICouleur`, `Rouge`, `Vert`, `Bleu`).
    *   `FormeFolder/` : Implémentations des formes (`IForme`, `Carre`, `Rectangle`, `Rond`).
*   **Factory/** : La logique de fabrication.
    *   `Factory.php` : Classe abstraite (`FactoryForm`) qui définit le contrat de création et stocke la liste globale des formes (`$ListOfForme`).
    *   `FactoryFormCarre.php` : Fabrique concrète pour les Carrés. Elle inclut une intelligence pour ne pas dupliquer les objets existants.
*   **index.php** : Script de démonstration et de test.

## Concepts Clés Illustrés

### 1. Le Pattern Factory (Fabrique)
La classe `FactoryForm` force l'implémentation de la méthode `MakeForme`. Cela centralise la logique d'instanciation.

### 2. Optimisation et Unicité (Identity Map)
Dans `FactoryFormeCarre`, le code vérifie si un objet existe déjà avant de le créer :

```php
// Vérification dans la liste statique
foreach (self::$ListOfForme as $forme) {
    if ($forme->Id === $id) {
        return $forme; // Retourne l'instance existante
    }
}
```
Ceci permet d'économiser la mémoire et d'assurer qu'un ID correspond toujours à la même instance PHP en mémoire lors de l'exécution.

### 3. Namespaces
Le projet utilise les espaces de noms (`namespace`) pour organiser proprement le code (`factorySpace`, `FormSpace`, `CouleurSpace`).

## Utilisation

Pour tester le projet, exécutez simplement le fichier `index.php` en ligne de commande :

```bash
php index.php
```

Le script affichera les propriétés des formes créées et démontrera que la demande d'une forme avec un ID existant renvoie bien l'objet original (pas de duplication).
