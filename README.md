<!-- PROJECT LOGO -->
<br />
<p align="center">
  <!-- <a href="https://github.com/takiddine/3now">
    <img src="https://3now.de/public/asset/new/cars/logoB.png" alt="Logo" >
  </a> -->

  <h3 align="center">Att-Event Project</h3>

  <!-- <p align="center">
    <br />
    <a href="https://doc.clickup.com/p/h/2ha4q-2615/f6f70979a6587a8">user api docs</a>
    ·
    <a href="https://doc.clickup.com/p/h/2ha4q-5317/9a4b150e2706e16/2ha4q-5317">provider api docs</a>
  </p> -->
</p>

### Info & Description

```
Laravel Version : 11.33.2

```

### Requirements

```
PHP VERSION  8.2.4
<!-- PHP GD extension: sudo apt-get install php8.2-gd -->

```

<!-- ### Notes

```
please make sure that the document root of the domaine points to /public directory for security reason
/etc/apache2/sites-available
do not forget to set this settings in both, https and http
``` -->
<!--
### Thank you

| Packagage            | source                                         |
| -------------------- | ---------------------------------------------- |
| Laravel Settings     | https://github.com/anlutro/laravel-settings    |
| Laravel-API-Debugger | https://github.com/mlanin/laravel-api-debugger |
| PayPal-PHP-SDK       | https://github.com/paypal/PayPal-PHP-SDK       | -->

### 1. clone the Package & install the packages and set the project folder name

```
git clone https://github.com/rajabrajab/aat-project.git  project
```

```
composer install
```

### 1. setup env file & testing env file

Run this commands from the Terminal:

```
cp .env.example .env
```

```
cp .env.example .env.testing
```

### 2. Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### 3. setup the database & add admin & some dummy data

Run this commands from the Terminal:

```
php artisan migrate
```

```
php artisan db:seed
```

### 4. publish telescope

```
php artisan telescope:publish
```

### 5. link storage to public

```
php artisan storage:link
```

### 5. genrate api key

```
php artisan key:generate
```

### 7. Login to admin dashboard

```
http://domain/log/1

```

## Contact

```
ABD ALWAHED RAJAB
email : abdalwahedrajabb@gmail.com
wtsp  : +963959011404
```
