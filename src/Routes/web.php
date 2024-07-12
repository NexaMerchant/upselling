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
use NexaMerchant\Upselling\Http\Controllers\Web\ExampleController;

Route::group(['middleware' => ['locale', 'theme', 'currency'], 'prefix'=>'upselling'], function () {

    Route::controller(ExampleController::class)->prefix('example')->group(function () {

        Route::get('demo', 'demo')->name('upselling.web.example.demo');

    });

});

include "admin.php";