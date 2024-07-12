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
use NexaMerchant\Upselling\Http\Controllers\Api\ExampleController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
     Route::prefix('upselling')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('upselling.api.example.demo');

        });

     });
});