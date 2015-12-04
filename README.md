# warriormachines-laravel

### Docker + Linux + NGiNX + MySQL + PHP-FPM + Laravel

# <CircleCI badge goes here>

## Environment setup

##### Docker Toolbox (for Windows 7):
* Install the latest version of [Docker Toolbox](https://www.docker.com/toolbox).
* Choose to have the Docker Toolbox wizard install the latest versions of *Virtualbox* and *Git Bash* if you don't have them already.
* Run the Docker Quickstart Terminal.

If needed, this is an alternate way to run Docker if the Docker Quickstart Terminal doesn't work for some reason.
In a Git bash shell, run the following commands:
* `docker-machine create --driver virtualbox default`
* `docker-machine start default`
* `eval "$(docker-machine env default)"`
If needed, this is an alternate way to SSH into the VM.
* `docker-machine ssh default`

##### Docker Compose:
* Install the latest version of [Docker Compose](https://docs.docker.com/compose/install/) via pip.
```shell
pip install --upgrade docker-compose
```

##### Run the *Database* container:
Note: If you already have the mysql-database container running, you can **skip this step**.
```shell
docker run -d --name="mysql-database" -p 3306:3306 -e "MYSQL_ROOT_PASSWORD=rootpass" mysql
```

##### Create the database:
In MySQL Workbench create a new schema called `warriormachines_local_db` with `utf8_general_ci` collation.

##### Configure environment file:
Copy `laravel/.env.example` to `laravel/.env` and enter the appropriate credentials. 

##### Use *Docker Compose* to bring `up -d`, `stop`, or `rm` the stack:
From within /your/project/directory/`warriormachines-laravel/`
```shell
docker-compose up -d
```

##### Run Composer installation:
This creates the `laravel/vendor` directory locally so when the local files are mounted into the container the application will function correctly with all the required dependencies.
```shell
docker run --privileged=true --rm --volumes-from warriormachineslaravel_WarriorMachinesLaravel_1 wpsinc/docker-composer install
```

Note: You may have to re-create the stack with Docker Compose after installing the dependencies with Composer.

##### Seed the database with dummy data:
```shell
docker run --privileged=true --rm --volumes-from warriormachineslaravel_WarriorMachinesLaravel_1 wpsinc/docker-artisan db:seed
```

##### Docker build
For documentation purposes only. If needed, run this command to manually build the Docker image.
```shell
docker build --rm --force-rm --tag="warriormachines/warriormachines-laravel" .
```
