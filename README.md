# How to use
Clone repo

`git clone https://github.com/webdevmatics/webmall.git`

Install the composer dependencies

`composer install`

`Save .env.example as .env and put your database credentials`

Set application key

`php artisan key:generate`   

And Migrate with

`php artisan migrate --seed` or `php artisan migrate:fresh --seed`

 `php artisan storage:link`
