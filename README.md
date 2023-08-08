# CRUD таблица на laravel со списком студентов и поиском/сортировкой 

## Как запустить
```bash
cp .env.example .env
```

настроить доступ к бд в .env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=students_list
DB_USERNAME=root
DB_PASSWORD=
```

затем:
```bash
composer install
npm install
php artisan migrate --seed
npm run dev
php -S 127.0.0.1 -t public
```