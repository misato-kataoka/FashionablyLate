# FasfhionablyLate  


##環境構築  
- git clone git@github.v\com:coachtech-material/laravel-docker-template.git
- docker-compose up -d --build
- docker-compose exec php bash
- composer create-project "laravel/laravel=8.*" . --prefer-dist
- git clone git@github.com:coachtech-material/laravel-docker-template.git
- git remote set-url origin git@github.com:misato-kataoka/FashionablyLate.git
- docker-compose up -d --build
- docker-compose exec php bash
- cp .env.example .env
- php artisan key:generate
- php artisan make:migration create_contacts_table
-  php artisan make:migration create_categories_table
-  php artisan migrate
-  php artisan key:generate
-  php artisan make:seeder FasfiionablyLateSeeder


##使用技術  
-PHP 8.0  
-Laravel (v8.6.12)  
-MySQL 8.4  


##URL  
-開発環境 http://localhost/  
-phpMyAdmin http://localhost:8080  
