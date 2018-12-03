<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Utils\HeroService;

class HeroServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind('hero',function($heroName){
            return new HeroService($heroName);
        });
    }
}