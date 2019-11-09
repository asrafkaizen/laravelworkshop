bengkel laravel
1. install sume
2. extract phpmyadmin folder as "pma" dlm folder laragon/www
3. tukar pw phpmyadmin root kat laragon
4. create laravel project kat laragon
5. validate web project ( via browser) & db ( via phpmyadmin) dah create
6. bukak vscode. hanya akan usik folder app/http
7. app/database, factory utk development/test. migrations utk buat table, seed utk  create user atau data tanpa perlu dia masukkan sndiri
8. change .env . Then, php artisan config:clear , cache:clear
9. php artisan migrate , php artisan migrate:rollback, migrate:refresh
10. Make Auth: composer require laravel/ui --dev , php artisan ui vue --auth
11. php artisan tinker, factory(App\User::class,10)->create()
12. php artisan make:seeder UsersTableSeeder, edit the run function of DatabaseSeeder.php (check commit), run by php artisan db:seed
13. removing register button: edit routes/web.php, and follow in https://laravel.com/docs/6.x/authentication
14. adding blog: php artisan make:model Blogs -a, add a route at routes/web.php, add codes in BlogController, add codes in newly created migration file, add folder and 2 files in resources\views\blogs. add view in controller, 
15. 