<?php
namespace RoySandip\LaravelView;

use Illuminate\Support\ServiceProvider;
use RoySandip\LaravelView\Commands\MakeViewCommand;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()   
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeViewCommand::class,
            ]);
        }

            
    }

    public function register()
    {
        
    }



}
