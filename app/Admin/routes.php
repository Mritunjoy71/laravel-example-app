<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('schools', SchoolController::class);
    $router->resource('movies', MovieController::class);
    $router->resource('books', BookController::class);
    $router->resource('profiles', ProfileController::class);
    $router->resource('articles', ArticleController::class);
    $router->resource('users', UserController::class);
    $router->resource('painters', PainterController::class);
    $router->resource('aroles', AroleController::class);
    $router->resource('ausers', AuserController::class);
    $router->resource('paintings', PaintingController::class);
    $router->resource('attachments', AttachmentController::class);
});
