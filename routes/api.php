<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// タスク一覧を取得する（GET）
Route::get('/tasks', [\App\Http\Controllers\Api\TaskController::class, 'index']);

// 新しいタスクを作成する（POST）
Route::post('/tasks', [\App\Http\Controllers\Api\TaskController::class, 'store']);

Route::get('/tasks/{id}', [\App\Http\Controllers\Api\TaskController::class, 'show']);


Route::put('/tasks/{id}', [\App\Http\Controllers\Api\TaskController::class, 'update']);


Route::delete('/tasks/{id}', [\App\Http\Controllers\Api\TaskController::class, 'destroy']);
