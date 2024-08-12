<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-12 15:48:01
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Upselling\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use NexaMerchant\Upselling\Facades\Upselling;
use NexaMerchant\Upselling\Contracts\UpsellingRule;
use NexaMerchant\Upselling\Repositories\UpsellingRuleRepository;


class UpsellingServiceProvider extends ServiceProvider
{
    private $version = null;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        Route::middleware('web')->group(__DIR__ . '/../Routes/web.php');
        Route::middleware('api')->group(__DIR__ . '/../Routes/api.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'Upselling');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Upselling');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        
        
        $this->app->register(EventServiceProvider::class);
        

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../Resources/views' => $this->app->resourcePath('themes/default/views'),
            ], 'Upselling');
        }

        

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(
        //     UpsellingRule::class,
        //     UpsellingRuleRepository::class
        // );

        $this->registerCommands();
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu.admin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php',
            'acl'
        );

        
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/Upselling.php', 'Upselling'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        // api docs
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/l5-swagger.php', 'l5-swagger.documentations'
        );
        
    }

    /**
     * Register the console commands of this package.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \NexaMerchant\Upselling\Console\Commands\Install::class,
                \NexaMerchant\Upselling\Console\Commands\UnInstall::class,
            ]);
        }
    }

    /**
     * Register cart as a singleton.
     *
     * @return void
     */
    protected function registerFacades(): void
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('upselling', Upselling::class);

        $this->app->singleton('upselling', \NexaMerchant\Upselling\Upselling::class);
    }
}
