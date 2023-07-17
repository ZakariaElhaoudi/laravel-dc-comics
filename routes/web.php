<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DC_comicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route :: get("/", [DC_comicController :: class, "index"])
    -> name('dc-comics.index');

Route :: get('/dc-comics/create', [DC_comicController :: class, 'create'])
    -> name('dc-comics.create');
Route :: post('/dc-comics', [DC_comicController :: class, 'store'])
    -> name('dc-comics.store');

Route :: get("/dc-comics/{id}", [DC_comicController :: class, "show"])
    -> name('dc-comics.show');
