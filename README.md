### Projet de licence (rendu)

**[Live Demo](https://mylibrairy.bhay.ovh/)** - Create a new account

## Avancement du projet
- [x] Création du projet symfony
- [x] TP2
- [x] TP3 + création de la relation `ManyToMany` entre les entités `User`->`Livre`
- [x] TP4
- [x] TP5
- [x] TP6
- [x] TP7
- [x] Librairie / Framework de style CSS (Bootstrap)

## GETTING STARTED

### Prerequisites
- composer
- symfony

In your console, run :
```
$ composer install
```

Connect the project to your database :
- create your database
- Modify databse URL in `.env`

Then :
```
$ php bin/console doctrine:migrations:migrate
```

### Start the server

```
$ symfony server:start
```
or
```
$ php bin/console server:run
```

## Fonctionnalités
- [x] Créer un compte
- [x] Modifier son mot de passe
- [x] Se connecter à l'application
- [x] Se déconnecter à l'application
- [x] Afficher son profil
- [x] Afficher la liste des livre du catalogue
- [x] Emprunter un livre
- [x] Retourner un livre
- [x] Affciher la liste des livres emprunter par l'utilisateur courant
- [x] Ajouter un livre au catalogue (depuis un livre)
- [x] Modifier un livre du catalogue (depuis un livre)
- [x] Supprimer un livre du catalogue (depuis un livre)
- [x] Afficher la liste des livres empruntés
- [x] Créer une catégorie de livre 
- [x] Modifier une catégorie de livre
- [x] Supprimer une catégorie de livre
- [x] Afficher une catégorie de livre
