
# Projet de Gestion de Ressources avec PHP et MySQLi 🚀

## Description du Projet

Ce projet vise à développer la partie backend d'une plateforme de gestion de ressources, de catégories et de sous-catégories. La société SQLi est satisfaite de la structure de la base de données et cherche maintenant à mettre en œuvre les fonctionnalités suivantes :

### Fonctionnalités Implémentées 🛠️

1. **CRUD Utilisateurs**
   - Ajouter, modifier et supprimer des utilisateurs.
  
2. **CRUD Ressources**
   - Gérer la liste des ressources disponibles.

3. **CRUD Catégories**
   - Ajouter, modifier et supprimer des catégories et sous-catégories.

4. **Statistiques**
   - Concevoir statistiques clés sur l'utilisation de la plateforme.

5. **Documentation des Scripts**
   - Commenter et documenter chaque script PHP de manière claire et concise.

## User Stories pour le Gestionnaire de Contenu 📚

### En tant qu'Administrateur 🧑‍💼

1. **Gestion des Utilisateurs**
   - En tant qu'administrateur, vous pouvez ajouter, modifier et supprimer des utilisateurs.

2. **Gestion des Ressources**
   - En tant qu'administrateur, vous pouvez gérer la liste des ressources disponibles.

3. **Statistiques d'Utilisation**
   - En tant qu'administrateur, vous pouvez avoir un aperçu des statistiques d'utilisation de la plateforme.

### En tant qu'Utilisateur 👤

1. **Consultation des Ressources**
   - En tant qu'utilisateur, vous pouvez consulter la liste des ressources disponibles.

2. **Opérations CRUD sur les Catégories**
   - En tant qu'utilisateur, vous pouvez effectuer des opérations CRUD sur les catégories et sous-catégories.

3. **Statistiques d'Utilisation Personnalisées**
   - En tant qu'utilisateur, vous pouvez voir des statistiques pertinentes sur votre utilisation de la plateforme.
## Conception de la Base de Données 🗄️

La base de données comprend les entités suivantes :

-   **Utilisateur :**  Identifié par un UserID unique, contenant des informations telles que le nom d'utilisateur et l'e-mail.
-   **Squad :**  Défini par un SquadID unique, associé à un projet spécifique (via ProjectID) et dirigé par un utilisateur leader (via UserID).
-   **Projet :**  Chaque projet a un ProjectID unique et est caractérisé par un nom, une description et des dates de début/fin.
-   **Ressource :**  Identifiée par un ResourceID, liée à une catégorie (via CategoryID) et à une sous-catégorie (via SubcategoryID). Peut être associée à un squad (via SquadID) et/ou un projet (via ProjectID).
-   **Catégorie et Sous-catégorie :**  Utilisées pour classer les ressources de manière organisée, chaque sous-catégorie étant associée à une catégorie spécifique.
-   **Data dictionnary:**

## Scripts PHP 📄

Les scripts PHP nécessaires pour implémenter les fonctionnalités susmentionnées sont disponibles dans ce dépôt. Chaque script est commenté et documenté pour assurer une compréhension claire et une maintenance facile.

## Configuration Requise 🛠️

- Serveur web (Apache, Nginx, etc.).
- PHP version 8.2
- Serveur MySQL.
- Base de données avec la structure préalablement définie.
## resource de documentation🙏
- https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql
- https://elzero.org/tag/php/
