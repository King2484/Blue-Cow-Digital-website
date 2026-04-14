<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;

/**
 *    Frontend
 */

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home'); // index
    Route::get('index2', 'indexTwo')->name('indexTwo');
    Route::get('index3', 'indexThree')->name('indexThree');
    Route::get('index4', 'indexFour')->name('indexFour');
    Route::get('index5', 'indexFive')->name('indexFive');

});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('services', 'services')->name('services');
    Route::get('services-two', 'servicesTwo')->name('servicesTwo');
    Route::get('service-details', 'serviceDetails')->name('serviceDetails');
    Route::get('project-list', 'projectList')->name('projectList');
    Route::get('project-grid', 'projectGrid')->name('projectGrid');
    Route::get('project-details', 'projectDetails')->name('projectDetails');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-standard', 'blogStandard')->name('blogStandard');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('team', 'team')->name('team');
    Route::get('team-details', 'teamDetails')->name('teamDetails');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('404', 'errorPage')->name('errorPage');
});
