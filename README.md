# docker-php-apache-mysql

Local Development Environment for PHP using Docker for Mac.

## Requirement

- Docker for Mac

## Usage

1. `cd ./docker`
2. `docker-compose up -d`
3. deploy your application to `./application`
4. edit `application/compose.json`
5. `docker-compose run composer install`


* If you want to use Xdebug for Remote debug, change Debug port to `9001`.
* If you want to test by PHPUnit, use `cli` service.
