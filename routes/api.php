<?php

use App\Http\Controllers\Api\ARTController;
use App\Http\Controllers\Api\ProfissionalController;
use App\Http\Controllers\Api\VistoController;
use App\Http\Controllers\Api\WebhookController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::get('/', function () {
        return response()->json(['message' => 'API de ARTs']);
    });

    Route::prefix('art')->group(function () {
        Route::post('/', [ARTController::class, 'store']);
        Route::get('{id}', [ARTController::class, 'show']);
        Route::delete('{id}', [ARTController::class, 'destroy']);
    });

    Route::prefix('visto')->group(function () {
        Route::post('/', [VistoController::class, 'store']);
        Route::get('{id}', [VistoController::class, 'show']);
        Route::put('{id}', [VistoController::class, 'update']);
        Route::delete('{id}', [VistoController::class, 'destroy']);
    });

    Route::prefix('profissional')->group(function () {
        Route::post('/', [ProfissionalController::class, 'store']);
        Route::get('{rnp}', [ProfissionalController::class, 'show']);
        Route::put('{rnp}', [ProfissionalController::class, 'update']);
        Route::delete('{rnp}', [ProfissionalController::class, 'destroy']);
    });

    Route::prefix('webhooks')->group(function () {
        Route::post('/', [WebhookController::class, 'store']);
        Route::get('{id}', [WebhookController::class, 'show']);
        Route::put('{id}', [WebhookController::class, 'update']);
        Route::delete('{id}', [WebhookController::class, 'destroy']);
    });
});
