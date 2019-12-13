<?php


namespace Lara\MyTranslater;

use Lara\MyTranslater\Contract\ITranslate;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/../resources/views','translater');
        $this->loadRoutesFrom(__DIR__.'/../routes/translater.php');
    }
    public function register(){
        $this->app->bind(ITranslate::class, function () {
            return new Translater();
        });
    }

}
