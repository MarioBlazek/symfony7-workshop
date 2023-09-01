# Symfony 7 Sandbox Project

* Symfony 7
* Symfony UX and some third party UX components
* Request payload to DTO mapping
* Webhooks
* Scheduled jobs
* Dependency Injection & Configuration best practices

## Installation

Run:

```sh
    docker-compose up -d
    docker-compose run --rm --user=app frontend composer install
    docker-compose run --rm --user=app frontend bin/console asset-map:compile
    docker-compose run --rm --user=app frontend bin/db
```

## Usage

Browse https://localhost:8000

## Credits

Robin Chalas, Symfony Casts & Jolicode for the docker setup
