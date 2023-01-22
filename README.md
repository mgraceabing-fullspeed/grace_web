## Requirements
- Docker Composer, Docker v18.06 or up
- Composer
- Yarn
- Node

## Installation

```
cd ~
git clone --recursive git@github.com:mgraceabing-fullspeed/grace_web.git
```

## Setup configuration files

1) Update host machine's hosts file

```
echo "::1 localhost grace.com" | sudo tee -a /etc/hosts
echo "127.0.0.1 localhost grace.com" | sudo tee -a /etc/hosts
```

2) Change to your project directory
```
cd ~/grace_web/
```

3) Configure the project's env file

```
cp .env.dist .env
```

You have to manually update paths to the projects if you did not clone the projects into ~/grace_web.


**Note**: TZ (timezone) and HOST_IP (ip) can be obtained as follows. Update .env:

```
sudo systemsetup -gettimezone | awk '{print $3}'
ifconfig en0 | awk '$1 == "inet" {print $2}'
```

## Running the server
1) Build base images
2) Build server containers

```
cd ~/grace_web/
make build
docker-compose up -d
composer install
yarn install
```

## Clear Cache
```
php bin/console cache:clear
```

## Access on browser
* [grace.com](http://grace.com:8882/)


## Useful commands
```
php bin/console make:controller DefaultController // generated new controller
yarn encore dev // to compile assets at once
yarn encore dev --watch // to recompile assets automatically when files change
yarn encore production //  On deploy, create a production build

```