<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SearchController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/entry/add', [EntryController::class, 'addEntry'])->name('addEntry')->middleware('auth');
Route::post('/entry/store', [EntryController::class, 'store'])->name('store.entry');

Route::get('/entry/show/{entry}', [EntryController::class, 'show'])->name('entry.show');
Route::get('/entry/edit/{entry}', [EntryController::class, 'edit'])->name('entry.edit')->middleware('auth');
Route::get('user/entry/{user}', [EntryController::class, 'entryUser'])->name('entry.user');

Route::put('/entry/update/{entry}', [EntryController::class, 'update'])->name('entry.update')->middleware('auth');
Route::delete('entry/delete/{entry}',[EntryController::class, 'delete'])->name('entry.delete')->middleware('auth');

Route::get('entry/search',[SearchController::class,'search'])->name('entry.search');
Route::get('category/entry/{category}', [EntryController::class, 'entryCategory'])->name('entry.category');
Route::get('tag/entry/{tag}', [EntryController::class, 'entryTag'])->name('entry.tag');

