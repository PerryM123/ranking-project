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
$ php artisan make:model RankingInfo -m
$ php artisan make:model Book --migration
$ php artisan make:controller BookController --api
$ php artisan make:seeder RankingPostSeeder
# When you add a new column:
$ php artisan migrate
$ 
```