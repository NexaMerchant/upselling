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
use NexaMerchant\Upselling\Http\Controllers\Api\V1\OrderController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
     Route::prefix('v1/upselling')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('upselling.api.example.demo');

        });

        Route::controller(OrderController::class)->prefix('order')->group(function () {

            Route::get('index', 'index')->name('upselling.api.order.index');
            Route::post('store', 'store')->name('upselling.api.order.store');

        });

     });
});