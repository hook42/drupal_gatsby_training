# Hook 42 Gatsby/Drupal Training

We thank you for taking this training and welcome your feedback.

For more information about Hook 42, please visit our website at [http://www.hook42.com](http://www.hook42.com).

## Local Dependencies

1. Git
1. Docker
1. Docker Compose
1. A stable internet connection :)

## Initial setup

1. Fork and clone this repository
1. Create a netlify account

## Running the project

### Install docker images

1. From command line: `docker-compose up -d`
1. `docker-compose exec drupal bash`
1. `composer install`
1. `exit` - you will leave the docker container and return to your host system.
1. `docker-compose exec gatsby bash`
1. `npm install`
1. `exit` - you will leave the container and return to host.

### Drupal

A server running Drupal is loaded and installed from the command above.

1. From Browser: [http://localhost:9667](http://localhost:9667)


### Gatsby

A server running Gatsby is loaded and installed from the command above.

The following steps demonstrate how to go into the server and execute Gatsby commands.

1. From command line: `docker-compose exec gatsby bash`
1. From command line:`gatsby develop -H 0.0.0.0`
1. From Browser: [http://localhost:9668](http://localhost:9668)

## Cleaning up the project locally

### Reset Drupal directory to initial state and remove docker containers:
`./cleanup`

### Remove only docker containers:
`docker-compose down --rmi all -v --remove-orphans`