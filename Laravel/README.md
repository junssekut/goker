## Goker

Goker is an website application, TBA, On Development, docs will be updated.

<p align="center">
    <img src="public/assets/images/goker-cerah.png" alt="goker image" width="738">
</p>

## Table of Contents

- [Goker](#goker)
- [Table of Contents](#table-of-contents)
- [Installation](#installation)
  - [Cloning The Repo](#cloning-the-repo)
    - [Windows x64](#windows-x64)
    - [Linux](#linux)
    - [macOS](#macos)
  - [Requirements](#requirements)
  - [Setting Up Environment](#setting-up-environment)
  - [Installing Vite](#installing-vite)
- [Usage](#usage)
  - [Running Laravel](#running-laravel)
  - [Running Vite](#running-vite)
  - [Web Application](#web-application)
- [Database Configuration](#database-configuration)
  - [.env file](#env-file)
  - [Migrate Database \&\& Seed](#migrate-database--seed)
- [About Goker](#about-goker)
- [Libraries](#libraries)
    - [Data Migrations](#data-migrations)

## Installation

### Cloning The Repo

#### Windows x64

```bash
git clone https://github.com/junssekut/goker.git
```

#### Linux

```bash
# Clone the repository
sudo apt update
sudo apt install -y git

git clone https://github.com/junssekut/goker.git
```

#### macOS

```bash
# Clone the repository
brew update
brew install git

git clone https://github.com/junssekut/goker.git
```

### Requirements

You need to install these requirements first before using this web application

- [**PHP**](https://getcomposer.com) (v8.2 or latest)
- [**Laravel**](https://laravel.com) (v11.3 or latest)
- [**node.js**](https://nodejs.org/en) (v20.17.0 or latest)

### Setting Up Environment

```bash
composer install
php artisan key:generate
php artisan migrate

php artisan serve # run laravel application
```

### Installing Vite

Add another command prompt at terminal and run

```bash
npm install && npm run dev
```

## Usage

### Running Laravel

On first terminal, run laravel by doing

```bash
php artisan serve
```

### Running Vite

On second terminal, run vite by doing

```bash
npm run dev
```

### Web Application

On your terminal there will be an IP Address that contains Goker Website Application

![alt text](docs/assets/images/image-rta-url.png)

## Database Configuration

### .env file

Set .env database section to

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=goker
DB_USERNAME=root
DB_PASSWORD=
```

After that, we can turn on XAMPP.

### Migrate Database && Seed

```bash
php artisan migrate:fresh --seed
```

## About Goker

Built brick by brick using our simply hands and behold,
- Shean Finnegan
- Matthew Raditya A. P.
- Cecilia Oktaviana
- Irene Setievi
- Arjuna Andio

## Libraries

- [**Laravel 11**](https://laravel.com/)
- [**Laravel Breeze**](https://github.com/laravel/breeze)

#### Data Migrations

- [**MySQL**](https://www.mysql.com/) *integrated with Laravel*
- [**XAMPP Control Panel**](https://www.apachefriends.org/)