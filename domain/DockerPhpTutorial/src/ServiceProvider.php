<?php

namespace DockerPhpTutorial;

use DockerPhpTutorial\Commands\TestInfrastructureCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                TestInfrastructureCommand::class,
            ]);
        }
    }
}
