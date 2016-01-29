# warriormachines-laravel

### Docker + Linux + NGiNX + MySQL + PHP-FPM + Laravel

[![Circle CI](https://circleci.com/gh/WarriorMachines/warriormachines-laravel.svg?style=svg&circle-token=049e6ec1339aca262d50128ac67e148dbc0a1318)](https://circleci.com/gh/WarriorMachines/warriormachines-laravel)

## Environment setup

##### Docker Toolbox (for Windows 7):
* Install the latest version of [Docker Toolbox](https://www.docker.com/toolbox).
* Choose to have the Docker Toolbox wizard install the latest versions of *Virtualbox* and *Git Bash* if you don't have them already.
* Run the Docker Quickstart Terminal.

##### Run the *Database* container:
Note: If you already have the mysql-database container running, you can **skip this step**.
```shell
docker run -d --name="mysql-database" -p 3306:3306 -e "MYSQL_ROOT_PASSWORD=rootpass" mysql:5.6
```

##### Create the database:
In MySQL Workbench create a new schema called `warriormachines_local_db` with `utf8_general_ci` collation.

##### Configure Laravel environment file:
Copy `.env.example` to `.env` and enter the appropriate credentials. 

##### Use *Docker Compose* to bring `up -d`, `stop`, or `rm` the stack:
From within /your/project/directory/`warriormachines-laravel/`
```shell
docker-compose up -d
```

##### Run Composer installation:
This creates the `vendor` directory locally so application will function correctly with all the required dependencies.
```shell
composer install
```

##### Seed the database with dummy data:
```shell
php artisan db:seed
```

##### Docker build
For documentation purposes only. If needed, run this command to manually build the Docker image.
```shell
docker build --rm --force-rm --tag="warriormachines/warriormachines-laravel" .
```
