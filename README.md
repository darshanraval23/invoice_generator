# laravel Package Development
## codelink/invoicegenrater
## stap for creating cusvtum pakage
```
Create Laravel Project
Create a folder directory for custom package
Initialize composer for package
Create and configure service provider
Add package routes
Create controller for i
Create and load view for paktkages
Publish : https://github.com/ & https://packagist.org/
```
## folder structure
```
	--packages
		--lp           ..................vender name 
			--calculater    .............package name
          --config
          --database
            --factories
            --migrations
          --resources
            --views
              --emails
                --index.blade.php
          --src   .................holl pakage code
            --route.php
            --calculaterserviceprovider.php
            --controller.php
            --view.blade.php
        --composer.json  ..............depandanc
        --README.md  .................git reademe
      
      "mandatery files"
        --CHANGELOG.md
        --phpunit.xml
        --LICENSE.md
        --gitignore

```
## run the command for crating composer file in pakages folder lp/calculater/

```
composer init

//enter the details 
paktkages name
description

//confirm genration
```
## Autoloading
//ragister custum pakage and set the parth in our aplication
By default, the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "modules/"
	  "Lp\\calculater\\": "package/lp/calculater/src"
    }
  }
}
```

## auto lode composer
```
composer dump-autoload
```

## create package service provider
```
php artisan make:provider CalculatorServiceProvider
```
copy the provider frome: App/provider/CalculatorServiceProvider  to:  package/lp/calculater/src/CalculatorServiceProvider

create route file in the src folder

## change namespace parth
from: namespace app\provider to: namespace Lp/calculater

## add the service provider in config/app.php
provider : [
    Lp/calculater/CalculatorServiceProvider
]
## include route file in the CalculatorServiceProvider

```
public function boot()
{
    include _DIR_."rout.php";
    //parth: package/lp/calculater/src/rute.php
}
```
# tips

`dont forgate to remove this line "minimum-stability": "dev" in composer.json when deploye it.`



