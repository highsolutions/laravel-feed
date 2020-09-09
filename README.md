![Laravel-Feed by HighSolutions](https://raw.githubusercontent.com/highsolutions/laravel-feed/master/intro.jpg)

Laravel-Feed
==========================

A simple feed generator for Laravel 5/6.x/7.x/8.x with support for RSS 2.

Installation
------------

Run the following command and provide the latest stable version (^4.0):

```bash
composer require highsolutions/feed
```

or add the following to your `composer.json` file:

```json
"highsolutions/feed": "^4.*"
```

This package uses Laravel 5.5 Package Auto-Discovery.
For previous versions of Laravel, you need to update `config/app.php` by adding an entry for the service provider:

```php
HighSolutions\Feed\FeedServiceProvider::class,
```

and add class alias:

```php
'Feed' => HighSolutions\Feed\Feed::class,
```

Publish package views (OPTIONAL):

```bash
php artisan vendor:publish --provider="HighSolutions\Feed\FeedServiceProvider"
```

Examples
------------

[How to generate basic feed (with optional caching)](https://github.com/RoumenDamianoff/laravel-feed/wiki/basic-feed)

[How to generate multiple feeds](https://github.com/RoumenDamianoff/laravel-feed/wiki/multiple-feeds)

[How to add images to your feed](https://github.com/RoumenDamianoff/laravel-feed/wiki/How-to-add-images-to-your-feed)

[How to use custom view for your feed](https://github.com/RoumenDamianoff/laravel-feed/wiki/How-to-use-custom-view)

[How to use custom content-type for your feed](https://github.com/RoumenDamianoff/laravel-feed/wiki/How-to-use-custom-content-type)

and more in the [Wiki](https://github.com/RoumenDamianoff/laravel-feed/wiki)

Credits
------------

This package was originally created by [RoumenDamianoff](http://github.com/RoumenDamianoff) and is available here: [laravel-feed](https://github.com/RoumenDamianoff/laravel-feed).

Currently is developed by [HighSolutions](https://highsolutions.org), software house from Poland in love in Laravel.
