
[![Travis](https://img.shields.io/travis/yedincisenol/vision.svg?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/dt/yedincisenol/vision.svg?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/v/yedincisenol/vision.svg?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/l/yedincisenol/vision.svg?style=for-the-badge)]()

* <a href="#php-config">Configuration</a>
* <a href="#laravel-install"> Laravel Installation</a>
* <a href="#usage">Usage examples</a>

### <a name="laravel-install"></a> Laravel Install

- Add composer
```php
composer require "yedincisenol/vision"
```

- Add service provider (For Laravel 5.6 before) 
`config/app.php`

```php
'providers' => [
    ...
    yedincisenol\Vision\LaravelServiceProvider::class
],
```

- Add Facede

`config/app.php`

```php
'aliases' => [
        ...
        'Vision'    =>  \yedincisenol\Vision\LaravelFacede::class
],
```

- Fill Environments
> copy theese parameters to your project .env and fill
```
VISION_CREDENTIALS_PATH=
```

> How to get credentials file? <a href="http://googlecloudplatform.github.io/google-cloud-php/#/docs/google-cloud/v0.73.0/guides/authentication">Visit here</a>

- Laravel Usage
```
use Vision;

$image = Vision::image(file_get_contents('https://cdn.britannica.com/700x450/04/1304-004-E64E228C.jpg'), ['LABEL_DETECTION']);
$results = Vision::annotate($image);
collect(Vision::annotate($image)->labels())->each(function ($l) { echo $l->description() . PHP_EOL; });
```

For more detail visit <a href="http://googlecloudplatform.github.io/google-cloud-php/#/docs/cloud-vision/v0.15.2/vision/readme">here</a>

- Publish Config file (Optional)

```$xslt
php artisan vendor:publish --tag=vision
```
