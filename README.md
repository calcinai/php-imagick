# php-imageick

PHP wrapper for command line ImageMagick utils compatible with PECL::Imagick

This library is a polyfill for the [PECL::Imagick](http://php.net/manual/en/book.imagick.php). All classes, functions and exceptions should 
be equivalent to the native ones.

This is a WIP, since the library is so massive - I'm looking at a way to parse the extension and auto-generate the code.


## Installation
With composer:

```
composer require calcinai/php-imagick
```


## Usage

Currently there is limited functionality, but it's built in a way that supports easy implementation of arguments.

A basic example:

```php
$image = new Imagick('~/sample.png');

$image->cropImage(190, 300, 350, 565);
$image->resizeImage(256, 350, Imagick::FILTER_CATROM, 0);

header("Content-Type: image/png");
echo $image->getImageBlob();
```