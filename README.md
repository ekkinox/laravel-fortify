# Laravel Fortify

> Laravel fortify example with two factor authentication.

## Set up

Composer install:

```shell
composer install
```

Create `.env` file:

```shell
cp .env.example .env
```

Create SQLite database:

```shell
touch database/database.sqlite
```

Change `DB_DATABASE` in `.env` file (specify absolute path):

```yaml
DB_DATABASE=/your/path/to/database/database.sqlite
```

Create the database schema:

```shell
php artisan migrate
```

## Usage

```shell
php artisan serve
```

Application will be available on [http://localhost:8000/](http://localhost:8000/).
