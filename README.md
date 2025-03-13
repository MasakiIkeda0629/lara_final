# profile
This is Masaki Ikeda's profile page. There is also a contact form where you can make inquiries and report problems.

# Requirements

- PHP 8.4.4+
- Composer
- MySQL 
- Laravel 12.0.1+
- Git
- macOS

# installation

```bash
git clone https://github.com/MasakiIkeda0629/lara_final.git

composer install
```
# .env

```zsh
# ".env.example"ファイルをコピーして".env"ファイルを作成します。
cp .env.example .env

# laravelのアプリケーションキーを生成します。
php artisan key:generate

# .envファイルのDB設定
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact
DB_USERNAME=root
DB_PASSWORD=root

# 以下実行
php artisan migrate
php artisan config:clear
php artisan serve
```

# Author
Masaki Ikeda