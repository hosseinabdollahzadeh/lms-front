<?php
Route::group(['middleware' => ['web'], 'namespace' => 'Abd\Front\Http\Controllers'],
    function ($router) {
        $router->get('/', 'FrontController@index');
        $router->get('/c-{slug}', 'FrontController@singleCourse')->name('singleCourse');
        $router->get('/all-courses', 'FrontController@allCourses')->name('allCourses');
        $router->get('/tutors/{username}', 'FrontController@singleTutor')->name('singleTutor');
        $router->get('/categories/{categoryId}', 'FrontController@showCategory')->name('showCategory');
    });
