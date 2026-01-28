# Docker Nginx PHP

This repository illustrates how to run a Web development environment based in Docker containers.

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

For Docker build configuration look at `/etc` directory.

The `/app` directory contains the PHP application built on the top of Slim framework.

## How to run the application?

Like any Web app just open a browser and navigate to `http://localhost:8080/`


## How to run tests in development mode?

Available testing tools are installed using Composer and can be run from `app/vendor/bin` directory.

A PHP CLI container is available named `php-cli`.

To run tests use one the following examples:

- `docker compose run php-cli "vendor/bin/phpstan"`
- `docker compose run php-cli "vendor/bin/phpunit"`
- `docker compose run php-cli "vendor/bin/php-cs-fixer"`
- `docker compose run php-cli "vendor/bin/rector"`