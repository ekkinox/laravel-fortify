# Laravel Fortify

> Laravel fortify example with two factor authentication.

<!-- TOC -->
* [Features](#features)
* [Set up](#set-up)
* [Usage](#usage)
<!-- TOC -->

## Features

- users can enable or disable two factor authentication on their profile
- users can also regenerate two factor recovery codes on their profile
- after login, two factor challenge will be performed (with TOTP or recovery code)

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
DB_DATABASE=/your/absolute/path/to/database/database.sqlite
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
