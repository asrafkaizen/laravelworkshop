bengkel laravel
1. install sume
2. extract phpmyadmin folder as "pma" dlm folder laragon/www
3. tukar pw phpmyadmin root kat laragon
4. create laravel project kat laragon
5. validate web project ( via browser) & db ( via phpmyadmin) dah create
6. bukak vscode. hanya akan usik folder app/http
7. app/database, factory utk development/test. migrations utk buat table, seed utk  create user atau data tanpa perlu dia masukkan sndiri
8. change .env . Then, php artisan config:clear , cache:clear
9. Make Auth: composer require laravel/ui --dev , php artisan ui vue --auth
10. 