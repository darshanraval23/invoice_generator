<?php

namespace Cig\Invoicegenrater;

use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*
            loadviewsfrom  take two paramiter viewfolder parth and namespace. 
            __dir__ refer src parth
        */
        $this->loadViewsFrom(__DIR__.'/resources/views', 'Invoicegenrater');
        $this->app->make('Cig\Invoicegenrater\InvoiceController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        include routes file
        */
        include __DIR__.'/route.php';
    }
}
