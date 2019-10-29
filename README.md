## Avancement du projet
- [x] Création du projet symfony
- [x] TP2
- [x] TP3 + création de la relation `ManyToMany` entre les entités `User`->`Livre`
- [x] TP4
- [x] TP5
- [ ] TP6
- [ ] TP7

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
