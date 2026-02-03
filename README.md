# Docker Nginx PHP

This repository illustrates how to run a Web development environment based in Docker containers and using a Slim PHP application.

## Requirements

Docker installed and running on the host computer.

## Instalation

Simply pull this repository using Git Clone.

## Usage

To bring containers up:

`docker-compose up -d`

To stop running containers:

`docker-compose down`
## Project structure

The file `docker-compose.yml` in the root directory contains the definition for all services running from Docker containers.

## How to run the application?

Like any Web app just open a browser and navigate to `http://localhost:8080/` or `https://localhost:8443` and in this case accept the self-signed certificate as valid.

## How to run tests in development mode?

Available testing tools are installed using Composer and can be run from `vendor/bin` directory.

A PHP CLI container is available named `php-cli`.

To run tests use one the following examples:

Unit and Integration tests with or withou code coverage:

- `docker compose run php-cli "vendor/bin/phpunit" --coverage-text`

- `docker compose run php-cli "vendor/bin/phpunit"`

Static Analysis:

- `docker compose run php-cli "vendor/bin/phpstan"`

Code Quality:

- `docker compose run php-cli "vendor/bin/php-cs-fixer"`


Coding Best Practices:

- `docker compose run php-cli "vendor/bin/rector"`