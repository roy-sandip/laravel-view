<?php
namespace RoySandip\LaravelView;

use Illuminate\Support\ServiceProvider;
use RoySandip\LaravelTcpdf\Commands\MakePDFCommand;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()   
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakePDFCommand::class,
            ]);
        }

            
    }

    public function register()
    {
        
    }



}
