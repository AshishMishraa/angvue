<?php

namespace App\Providers;

use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class IdentifierGenerationServiceProvider extends ServiceProvider
{

    private $models = [
        '\App\Client',
    ];

    public function boot()
    {
        foreach ($this->models as $modelClass)
        {
            $modelClass::creating(function($model) {
                $parts = explode(' ', microtime() );
                $mTime = $parts[0] + $parts[1];
                $model->id = $mTime . '_' . uniqid('', TRUE);
            });
        }
    }

    public function register()
    {

    }

}