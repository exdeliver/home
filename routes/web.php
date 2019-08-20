<?php

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

Route::get('/', function ($action = 'getSlug') {
    return app()->make('Exdeliver\Causeway\Controllers\PageController')
        ->callAction($action, [\Exdeliver\Causeway\Domain\Entities\Page\Page::whereTranslation('slug', 'home')
            ->first()]);
});

Route::get('/{pageSlug?}', '\Exdeliver\Causeway\Controllers\PageController@getSlug');