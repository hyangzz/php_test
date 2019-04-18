<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('/file/{projectname?}/{project_id?}/{folder?}', 'FileController@main');
    $router->resource('/file', 'FileController');
    $router->resource('project','ProjectController');
});
