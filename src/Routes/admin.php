<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-12 15:48:01
 * @link https://github.com/xxxl4
 * 
 */
use Illuminate\Support\Facades\Route;
use NexaMerchant\Upselling\Http\Controllers\Admin\ExampleController;
use NexaMerchant\Upselling\Http\Controllers\Admin\UpsellingController;
use NexaMerchant\Upselling\Http\Controllers\Admin\SettingController;

Route::group(['middleware' => ['admin','admin_option_log'], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('upselling')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('upselling.admin.example.demo');

        });

        //Upselling.admin.settings.index
        Route::controller(SettingController::class)->prefix('settings')->group(function () {

            Route::get('/', 'index')->name('Upselling.admin.settings.index');

        });


    });
});