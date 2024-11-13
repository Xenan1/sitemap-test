1. Run docker 
```shell
docker compose up -d
```
2. Install composer
```shell
docker compose exec -it php composer install
```
3. Run script
```shell
docker compose exec -it php php test.php
```