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

Route :: get("/dc-comics/show{id}", [DC_comicController :: class, "show"])
    -> name('dc-comics.show');

Route :: get('/dc-comics/create', [DC_comicController :: class, 'create'])
    -> name('dc-comics.create');
Route :: post('/dc-comics', [DC_comicController :: class, 'store'])
    -> name('dc-comics.store');

Route :: get("/dc-comics/edit{id}", [DC_comicController :: class, "edit"])
    -> name('dc-comics.edit');

Route :: put("/dc-comics/update{id}", [DC_comicController :: class, "update"])
    -> name('dc-comics.update');

Route :: delete("/dc-comics/destroy{id}", [DC_comicController :: class, "destroy"])
    -> name('dc-comics.destroy');