# Laravel Fortify

> Laravel fortify example with two factor authentication.

<!-- TOC -->
* [Features](#features)
* [Installation](#installation)
* [Usage](#usage)
<!-- TOC -->

## Features

- users can enable or disable two factor authentication on their profile
- users can also regenerate two factor recovery codes on their profile
- after login, two factor challenge will be performed (with TOTP or recovery code)

## Installation

Composer install:

```shell
composer install
```

Create `.env` file:

```shell
cp .env.example .env
```

Create the SQLite database:

```shell
touch database/database.sqlite
```

Change `DB_DATABASE` value in `.env` file (absolute path):

```yaml
DB_DATABASE=/your/absolute/path/to/database/database.sqlite
```

Create the database schema:

```shell
php artisan migrate
```

## Usage

Start the application:

```shell
php artisan serve
```

The application will be available on [http://localhost:8000](http://localhost:8000).

You can then [register an account](http://localhost:8000/register), and enable two factor authentication on your [account profile](http://localhost:8000/profile).
