# Commands

```sh
$ docker-compose up -d --build
$ docker compose exec app bash
$ docker-compose exec db bash
$ docker compose exec db mysql -V
$ docker-compose exec web nginx -v
$ mysql -u root -p
# Seeding
$ php artisan db:seed --class=BooksSeeder
```