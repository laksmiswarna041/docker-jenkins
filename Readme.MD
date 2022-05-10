PROBLEM:
1. Create a docker volume and mount to the mysql container to store the database data (/var/lib/mysql/data)
2. Create another docker volume and mount to the apache2 container to store the web application data (/var/www/html)
3. Create a docker secret to store the mysql db credentials (username and password), so that it can be used to connect to the database from the web application
4. Create a docker compose file to deploy apache and mysql containers

STEPS:
1. Create a directory: my-php-site
2. Create a file under my-php-site: docker-compose.yml
3. Create another directory under my-php-site : webapp
4. Create 2 files under webapp: index.php and dockerfile
5. docker-compose up --build -d
6. curl http://localhost:5000

Storing Secret keys
1. docker swarm init
2. echo root | docker secret create mysql_root_password -
3. echo root | docker secret create mysql_password -
4. docker secret ls and make changes in docker file
5. docker-compose up --build -d
6. curl http://localhost:5000
