# Laravel Invoices

This Laravel package provides an easy to use interface to generate **Invoice PDF files** with your provided data.

Invoice file can be stored, downloaded, streamed on any of the filesystems you have configured. Supports different templates and locales.

Originally package was developed on PHP 7.3.11 and Laravel 6.2, but should work on lower versions too.

## Features
- Taxes - fixed or rate - for item or for invoice
- Discounts - fixed or by percentage - for item or for invoice
- Shipping - add shipping price to your invoices
- Automatic calculation - provide minimal set of information, or calculate yourself and provide what to print
- Due date
- Easy to customize currency format
- Serial numbers as you like it
- Templates
- Translations
- Global settings and overrides on-the-fly

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Installation

Via Composer

### Laravel version <= 9

```bash
$ composer require laraveldaily/laravel-invoices:^3.0
```

### Laravel version <= 8

```bash
$ composer require laraveldaily/laravel-invoices:^2.0
```

### Laravel version <= 7

```bash
$ composer require laraveldaily/laravel-invoices:^1.3
```

After installing Laravel Invoices, publish its assets, views, translations and config using the `invoices:install` Artisan command:
```bash
$ php artisan invoices:install
```

### Updates

Since it is evolving fast you might want to have latest template after update using Artisan command:
```bash
$ php artisan invoices:update
```
> It will give a warning if you really want to override default resources

Or alternatively it can be done separately.
```bash
$ php artisan vendor:publish --tag=invoices.views --force
```

```bash
$ php artisan vendor:publish --tag=invoices.translations --force
```

### For Laravel version < 5.5

If you don't use auto-discovery, add the ServiceProvider to the providers array in `config/app.php`

```php
LaravelDaily\Invoices\InvoiceServiceProvider::class,
```

If you want to use the facade to generate invoices, add this to your facades in `config/app.php`

```php
'Invoice' => LaravelDaily\Invoices\Facades\Invoice::class
```


## Templates

After publishing assets you can modify or make your own template for invoices.

Templates are stored in the `resources/views/vendor/invoices/templates` directory. There you will find `default.blade.php` template which is used by default.

You can specify which template to use by calling `template` method on Invoice object.

For example if you have `resources/views/vendor/invoices/templates/my_company.blade.php` it should look like this:

```php
Invoice::make('receipt')->template('my_company');
```

Too see how things work in a template you can view `default.blade.php` as an example.

## Testing

``` bash
$ composer test
```