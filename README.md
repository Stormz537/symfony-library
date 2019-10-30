## Avancement du projet
- [x] Création du projet symfony
- [x] TP2
- [x] TP3 + création de la relation `ManyToMany` entre les entités `User`->`Livre`
- [x] TP4
- [x] TP5
- [ ] TP6
- [ ] TP7
- [ ] Librairie / Framework de style CSS

## GETTING STARTED

### Prerequisites
- composer
- symfony

In your console, run :
```
$ composer install
```

Connect the project to your database :
- Modify databse URL in `.env.example` and save under `.env`

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
- [ ] Modifier son mot de passe
- [x] Se connecter à l'application
- [x] Se déconnecter à l'application
- [ ] Afficher son profil
- [ ] Afficher la liste des livre du catalogue
- [x] Emprunter un livre
- [x] Retourner un livre
- [ ] Affciher la liste des livres emprunter par l'utilisateur courant
- [x] Ajouter un livre au catalogue (depuis un livre)
- [x] Modifier un livre du catalogue (depuis un livre)
- [x] Supprimer un livre du catalogue (depuis un livre)
- [ ] Afficher la liste des livres emprumtés
- [x] Créer une catégorie de livre 
- [x] Modifier une catégorie de livre
- [x] Supprimer une catégorie de livre
- [x] Afficher une catégorie de livre