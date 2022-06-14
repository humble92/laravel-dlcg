<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# laravel-dlcg

## Prerequisites

- Dockerd is installed
- php 8.1

## Installation

1. Clone repository and set up .env variables with your favorite editors.

```bash
git clone https://github.com/humble92/laravel-dlcg.git
cd laravel-dlcg
cp .env_example .env
vi .env
```

2. Install

```bash
composer install --ignore-platform-reqs
npm install
npm run dev
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

3. Run servers.

```bash
sudo sail up
```

4. DB migration

Import sample.sql into your DB with your favorite mysql client tools.

Then, migrate to apply for foreign keys on appropriate tables.

```bash
sudo sail artisan migrate
```

5. Connect to server

You can connect to the server `http://localhost`

```
http://localhost/api/categories
http://localhost/api/products
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
