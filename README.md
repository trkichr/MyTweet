<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 初期設定
- laravel sailのインストール
<br>composer create-project laravel/laravel MyTweet --prefer-dist "9.*"
<br>cd MyTweet
<br>php artisan sail:install
<br>sail up -d
<br>sail mysql
<br>drop database laravel;
<br>create database laravel;

- Dockerfileの変更
<br>sail artisan sail:publish
<br></br>docker/8.x/Dockerfileの編集
<br>ENV TZ='Asia/Tokyo'
<br></br>sail build --no-cache
<br>sail shell
<br>date

- MySQLの設定
<br>dockercompose.ymlに追加
<br>- './docker/8.x/my.cnf:/etc/my.cnf'
<br></br>docker/8.1/my.cnfの編集
<br>[mysqld]
<br>character-set-server = utf8mb4
<br>collation-server = utf8mb4_bin
<br></br>[client]
<br>default-character-set = utf8mb4
<br></br>変更の確認
<br>sail mysql
<br>show variables like '%char%';

- GitHubの導入
<br>git init
<br>git add .
<br>git commit -m "first commit"
<br>git branch -M main
<br>git remote add origin git@github-mytweet:trkichr/MyTweet.git
<br>git push -u origin main

- XDebugの設定
<br>launch.jsonの編集
<br>"name": "Listen for Xdebug",
<br>"type": "php",
<br>"request": "launch",
<br>"port": 9003,
<br>"stopOnEntry": false,
<br>"pathMappings": {
<br>    "/var/www/html": "${workspaceFolder}"
<br>},
<br></br>.envの編集
<br>SAIL_XDEBUG_MODE=develop,debug
<br></br>sailの再起動
<br>sail down
<br>sail up -d
<br></br>デバッグの確認
<br>ブレークポイントを設定してデバッグを実行
<br>?XDEBUG_SESSION_START=session_nameをURLの末尾に追加
