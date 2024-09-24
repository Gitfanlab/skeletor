<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">Skeletor</h1>

Skeletor est un modèle d'application qui servira pour la création des nouveaux SI (Systèmes d'Information) du FANLab. Il est basé sur le framework PHP Laravel et intègre les fonctionnalités de base nécessaires à la plupart des applications comme :

-   [L'authentification des utilisateurs](https://laravel.com/docs/11.x/starter-kits#laravel-breeze).
-   [La gestion des rôles et des permissions](https://spatie.be/docs/laravel-permission/v6/introduction).
-   [Des opérations CRUD basiques](#).
-   [Une solution de conteneurisation](https://laravel.com/docs/11.x/sail).

Toutes ces fonctionnalités seront inclues dans Skeletor afin de garantir au développeur un bon démarrage lors de la création du projet ainsi qu'un procédé de développement rapide.

## Installation

Pour installer Skeletor, vous devez suivre les étapes suivantes :

1. Cloner le dépôt

```bash
git clone https://github.com/Gitfanlab/skeletor.git
```

2. Installer les dépendances

```bash
composer install

npm install
```

3. Créer un fichier `.env` à partir du fichier `.env.example`

```bash
cp .env.example .env
```

4. Générer une clé d'application

```bash
php artisan key:generate
```

5. Configurer la base de données dans le fichier `.env`

```bash
DB_CONNECTION=mariadb
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=skeletor
DB_USERNAME=admin
DB_PASSWORD=admin
```

6. Exécuter les migrations et les seeders

```bash
php artisan migrate --seed
```

**RECOMMANDÉ :** Dans les seeders, vous trouverez le fichier `database/seeders/DatabaseSeeder.php` qui contient le script de création de l'utilisateur administrateur ainsi que la logique d'attribution des rôles. Vous pouvez modifier les informations de cet utilisateur avant de lancer le seeder.

7. Lancer le serveur

```bash
php artisan serve
```

## Socle technique

Skeletor est basé sur les technologies suivantes :

-   [Laravel](https://laravel.com/docs/11.x) - Le framework PHP utilisé
-   [TailwindCSS](https://tailwindcss.com/) - Le framework CSS utilisé
-   [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) - Le package d'authentification des utilisateurs
-   [Spatie](https://spatie.be/docs/laravel-permission/v6/introduction) - Le package de gestion des rôles et des permissions
-   [Sail](https://laravel.com/docs/11.x/sail) - La solution de conteneurisation (non utilisée à l'origine mais disponible)

Celles-ci permettent de garantir un développement rapide et efficace de l'application, tout en respectant certains critères du Cadre de Cohérence Technique :

-   **Sécurité** : Les utilisateurs sont authentifiés et autorisés à accéder à certaines ressources de l'application.
-   **Performance** : Le contenu est <a target="_blank" href="https://www.sanity.io/glossary/server-side-rendering">rendu côté serveur (SSR)</a>. Cela permet d'améliorer la performance de l'application en privilégiant une utilisation légère des ressources client.
-   **Maintenabilité** : Le code est structuré et organisé pour faciliter la maintenance et l'évolution de l'application.
-   **Extensibilité** : Les fonctionnalités de l'application peuvent être étendues et modifiées facilement.
-   **Testabilité** : Les tests unitaires et fonctionnels peuvent être écrits pour garantir le bon fonctionnement de l'application.
