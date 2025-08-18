# Graphiques PHP SQL JS

Ce projet permet d'afficher des graphiques dynamiques à partir de données MySQL, en utilisant PHP pour la récupération des données et Google Charts (JavaScript) pour la visualisation.

## Fonctionnalités
- Connexion à une base de données MySQL (structure fournie dans `bd/gestion_students.sql`).
- Récupération des moyennes de notes par matière.
- Affichage d'un graphique interactif (BarChart) avec Google Charts.
- Interface simple et responsive.

## Structure du projet
```
index.php           # Page principale avec le graphique
style.css           # Feuille de style
bd/
  gestion_students.sql  # Script SQL pour la base de données
  adminer.php           # Outil d'administration de la BDD
```

## Prérequis
- Serveur web avec PHP (ex : XAMPP, WAMP, LAMP)
- MySQL/MariaDB

## Installation
1. Importez le fichier SQL `bd/gestion_students.sql` dans votre serveur MySQL.
2. Modifiez les identifiants de connexion dans `index.php` si besoin (`$db_host`, `$db_user`, `$pwd`, `$db_name`).
3. Placez tous les fichiers dans le dossier racine de votre serveur web.
4. Accédez à `index.php` via votre navigateur.

## Personnalisation
- Pour ajouter d'autres graphiques, utilisez Google Charts et adaptez la requête SQL selon vos besoins.
- Le style est personnalisable via `style.css`.

## Auteur
**Ludovic** - [ludovicdevio](https://github.com/ludovicdevio)


## Licence
Ce projet est open source, libre d'utilisation et de modification.
