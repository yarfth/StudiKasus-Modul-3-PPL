# StudiKasus-Modul-3-PPL

Lakukan clone proyek pada device kalian masing masing git clone

composer update

duplikatkan file .env.example lalu duplikasi file tersebut direname menjadi .env 

Sesuaikan variabel APP_URL di file .env dengan port server teman-teman (contoh: http://localhost:8000 atau http://127.0.0.1:8000)

Generate key dengan perintah php artisan key:generate

Lakukan penyesuaian database pada .env 
contoh: DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=7000 DB_DATABASE=dusklaravel DB_USERNAME=root DB_PASSWORD=

composer require laravel/dusk --dev

php artisan dusk:install

Migrate database dengan perintah php artisan migrate & npm run dev pada terminal/cmd yang berbeda

Jalankan proyek laravel dengan perintah php artisan serve
