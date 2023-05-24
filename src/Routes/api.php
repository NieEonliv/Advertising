<?php

use Illuminate\Support\Facades\Route;
use Nieeonliv\Advertising\Enums\AdvertisingScopeEnum;
use Nieeonliv\Advertising\Http\Controllers\AdvertisingController;
use Nieeonliv\Advertising\Http\Controllers\LinkController;

Route::prefix('advertising')->group(function () {
    Route::controller(AdvertisingController::class)->group(function () {
        Route::get('', 'index');

        Route::middleware(['auth:admin','scopes:'.AdvertisingScopeEnum::EDIT->value])->group(function () {
            Route::post('', 'store');
            Route::patch('{advertising}', 'update');
            Route::delete('{advertising}', 'destroy');
        });
    });

    Route::controller(LinkController::class)->prefix('links')->group(function () {
        Route::get('', 'index');

        Route::middleware(['auth:admin','scopes:'.AdvertisingScopeEnum::LINKER->value])->group(function () {
            Route::post('', 'store');
            Route::patch('{link}', 'update');
            Route::delete('{link}', 'destroy');
        });
    });
});
