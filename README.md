# WP Plugin Base

Base plugin with testing suite and Docker. Easy setup for VSCode users.

## Prerequisites

1. Docker
2. Composer
3. Nodejs
4. PHP 7+

## Included DevTools & Tests

1. XDebug
2. PHPUnit
3. PHPCS & PHPCBF

If you are using VSCode, I'd suggest installing the following extensions to fully take advantage of the tools.

1. PHP Debug - Step through your code by adding breakpoints, trigger on errors, and more.
2. PHP Sniffer & Beautifier - Show PHPCS errors and auto fix files on save.
3. Run on Save - Run PHPUnit on file save.

Tip: you can add a breakpoint and save any PHP file to trigger XDebug's stepper.

## Renaming

Make sure you are matching case when replacing.

1. Abbreviations: `WPP, wpp`
2. Package: `WP_Plugin_Base`
3. Container names: `wpp-plugin-db, wpp-plugin-app`

## Setup 

```
composer install
docker-compose build wpp (only need to do this once or if you change the Dockerfile)
docker-compose up -d # Start
docker-compose down # Stop
```

You can now access the WordPress instance at https://localhost:8080

### Using Test Suite

Install scripts for PHPUnit `docker-compose exec wpp install-wp-tests`

```
docker-compose exec wpp cr test # runs PHPUnit and PHPCS
docker-compose exec wpp cr phpunit
docker-compose exec wpp cr phpcs
docker-compose exec wpp cr fix # Runs PHPCBF
```
