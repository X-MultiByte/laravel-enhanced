# Laravel Enhanced

## Installation:

### Run this command in your laravel root directory via Composer.

```bash
composer require x-multibyte\laravel-enhanced
```

### Install Package

```bash
php artisan enhanced:install 
```

#### Publishing the package Config, Database Migration, Language, Assets.

```bash
# Publish all
php artisan vendor:publish --provider="XMultibyte\Enhanced\ServiceProvider"

# Config 
php artisan vendor:publish --provider="XMultibyte\Enhanced\ServiceProvider" --tag=enhanced_config

# Migration
php artisan vendor:publish --provider="XMultibyte\Enhanced\ServiceProvider" --tag=enhanced_migration

# Language
php artisan vendor:publish --provider="XMultibyte\Enhanced\ServiceProvider" --tag=enhanced_language

# Assets
php artisan vendor:publish --provider="XMultibyte\Enhanced\ServiceProvider" --tag=enhanced_assets
```

## Usage

```php
use XMultibyte\Enhanced\Application;

$helper = Enhanced::Helper();

```

## To-Do

- Helper Function: customize Function.
- Open Data Collection: Countries & Provinces, Country Code,

## License

The MIT License (MIT). Please see [License](LICENSE) File for more information.

