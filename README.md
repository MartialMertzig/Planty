# Planty – Site WordPress

**Planty** est un site vitrine développé avec WordPress dans le cadre d’un exercice de développement front-end. Il met en valeur l’activité de Planty, une entreprise spécialisée dans la vente de boissons naturelles, à travers un design moderne et responsive basé sur des maquettes Figma.

## Objectifs du projet

- Développer un site vitrine responsive avec WordPress  
- Intégrer 3 pages principales selon les maquettes Figma fournies  
- Permettre la modification facile du contenu via l’administration WordPress  
- Mettre en place des formulaires fonctionnels (contact et précommande)  
- Respecter les bonnes pratiques HTML/CSS (validation W3C)  

## Pages développées

### Page d’accueil

- Présentation de l’entreprise  
- Mise en avant des produits  
- Affichage des avis clients  

### Page “Nous rencontrer”

- Présentation de l’équipe  
- Formulaire de contact (envoi à l’adresse : planty.drinks@gmail.com)  

### Page “Précommande”

- Formulaire permettant de passer une précommande (envoi également à planty.drinks@gmail.com)  

## Fonctionnalités techniques

- Contenu (textes et images) modifiable via l’administration WordPress  
- Formulaires envoyant un e-mail avec les données saisies  
- Lien "Admin" visible uniquement pour les utilisateurs connectés (via un hook WordPress)  
- Code HTML et CSS validé par le W3C Validator (hors plugins et thème de base)  

## Responsive Design

Le site s’adapte à toutes les tailles d’écran :  
- Desktop  
- Tablette  
- Mobile (à partir de 320px)  

Les maquettes desktop ont été suivies fidèlement, tandis que les versions tablette et mobile ont été adaptées librement.

## Maquettes Figma

- Maquette Figma  
- Prototype interactif  

## Installation du projet

### Cloner le dépôt

git clone https://github.com/votre-utilisateur/planty-wordpress.git

### Structure du dépôt

planty-wordpress/
├── app/                   -> Fichiers WordPress (thème, plugins)
├── conf/                  -> Fichiers de configuration éventuels
├── logs/                  -> Logs du projet (à exclure du dépôt public)
├── database/              -> Contient la base de données SQL
│   └── Mertzig_Martial_bdd_102023.sql
├── screenshots/           -> Captures d’écran du site
│   ├── accueil-desktop.jpg
│   ├── précommande-desktop.jpg
│   └── précommande-mobile.jpg
├── .gitignore             -> Fichiers à exclure du suivi Git
├── .gitattributes
├── README.md              -> Ce fichier

## Base de données

Fichier fourni :  
database/Mertzig_Martial_bdd_102023.sql

### Instructions pour l’importation

1. Ouvrir phpMyAdmin (ou Adminer, selon votre outil)  
2. Créer une base de données, par exemple nommée `planty`  
3. Importer le fichier SQL :
   - Aller dans l’onglet *Importer*  
   - Sélectionner le fichier `Mertzig_Martial_bdd_102023.sql`  
   - Lancer l’importation  

4. Mettre à jour les URLs si nécessaire avec la requête SQL suivante :

UPDATE wp_options 
SET option_value = 'http://localhost/planty' 
WHERE option_name = 'siteurl' OR option_name = 'home';

## Captures d’écran

Les captures suivantes illustrent le rendu visuel du site :

- Accueil (version desktop)  
- Formulaire de précommande (version mobile)  
- Formulaire de précommande (version desktop)

Les images sont stockées dans le dossier `screenshots/`. Veuillez le créer si nécessaire pour un affichage correct.

## Auteur

Projet réalisé par **Martial Mertzig**  
Formation : Développement Web – OpenClassrooms  
Projet : P6 – Créez un site WordPress complet et responsive
