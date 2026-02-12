# Docker Nginx PHP

This repository illustrates how to run a Web development environment based in Docker containers and using a Slim PHP application.

## Requirements

Docker installed and running on the host computer.

## Instalation

Simply pull this repository using Git Clone.

## Usage

To bring containers up:

`docker compose up -d` to pull images and run containers in background or just `docker compose up` to run them in foreground.

To stop running containers:

`docker compose down`
## Project structure

The file `compose.yml` in the root directory contains the definition for all services running from Docker containers.

Any service details can be adjusted and other services can be added creating a file named `compose.override.yaml` which is not tracked by Git.

## How to run the application?

Like any Web app just open a browser and navigate to `http://localhost:8080/` or `https://localhost:8443` and in this case accept the self-signed certificate as valid.

## SSL certificate

In order to run the web application under HTTPS a self-signed certificate is automatically generated and hosted in `var/ssl` directory.

To generate a fresh new certificate just run the `ssl` container once again:

`docker compose run `ssl`

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