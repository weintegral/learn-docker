# Docker Features

### How to download a new image from Docker Registry?

```bash

docker pull <image_name>

docker pull ubuntu@latest
```

### How to create and run container from an image?

```bash

docker run -it ubuntu bash
```

### How to map ports from guest machine(container) to Host machine(windows/mac) ?

```bash

docker run -p 8080:80 httpd
```

### How to view images on host machine?

```bash
docker images
```


### How to view running containers?

```bash

docker ps
```

### How to login to existing running container?

```bash
docker exec -it bash <container_id> bash
```

### How to kill a container ?

```bash

docker kill <containerId>
```


### How to mount volume(space on host machine) to docker container?

```bash

docker run -v app_data:/path/in/container ubuntu
```

### How to build all containers defined in docker-compose.yml file?

```bash

docker compose up -d
```

### How to destroy all containers defined in docker-compose.yml file?

```bash

docker compose down
```


### How to login to a container created by docker-compose.yml file?

```bash

docker compose exec -it <service_name> bash

docker compose exec -it web bash
```

### How to list all containers created by docker-compose.yml file?

```bash

docker compose ps
```

How to connect with database container?

```bash

mysql -h 127.0.0.1 -P <host_db_port> -u root -p

mysql -h 127.0.0.1 -P 33060 -u root -p
```

How to import sql database into db container?

```bash

mysql -h 127.0.0.1 -P 33060 -u root -p < docker/db/mysqlsampledatabase.sql
```