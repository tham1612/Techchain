<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashbroad');
        })->name(

            'dashbroad'
        );;
        Route::prefix('catelogues')
            ->as('catelogues.')
            ->group(function () {
                Route::get('/', [\App\Http\Controllers\Admin\CatelogueController::class, 'index'])->name('index');
                Route::get('create', [\App\Http\Controllers\Admin\CatelogueController::class, 'create'])->name('create');
                Route::post('store', [\App\Http\Controllers\Admin\CatelogueController::class, 'store'])->name('store');
                Route::get('show/{id}', [\App\Http\Controllers\Admin\CatelogueController::class, 'show'])->name('show');
                Route::get('{id}/edit', [\App\Http\Controllers\Admin\CatelogueController::class, 'edit'])->name('edit');
                Route::put('{id}/update', [\App\Http\Controllers\Admin\CatelogueController::class, 'update'])->name('update');
                Route::delete('{id}/destroy', [\App\Http\Controllers\Admin\CatelogueController::class, 'destroy'])->name('destroy');

            });
        Route::resource('products',\App\Http\Controllers\Admin\ProductController::class);
    });
