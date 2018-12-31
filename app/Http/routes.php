<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //存放在resources/views/下，一般都是blade模板引擎
    //return view('welcome');

//    $name = '<h1>jelly</h1>';
    //文件夹下的某个网页，可以用sites.about或者sites/about
    //return view('sites/about');
//    return view('sites.about')->with('name',$name);

    $firstName = 'zeller';
    $lastName = 'atom';
    //使用compact传递
    return view('sites.about',compact('firstName','lastName'));
});




//一般路由不是直接交给匿名函数，而是交给controller处理，这个跟koa一样
//快速创建controller方法
//php artisan make:controller SitesController
Route::get('/site','SitesController@index');//@表示调用index函数

Route::get('/about','SitesController@about');

Route::get('/contact','SitesController@contact');

//使用resource方法注册路由
Route::resource('articles','ArticlesController');

//@登录注册路由
//登录表单
Route::get('auth/login','Auth\AuthController@getLogin');
//验证登录
Route::post('auth/login','Auth\AuthController@postLogin');
//注册表单
Route::get('auth/register','Auth\AuthController@getRegister');
//验证注册
Route::post('auth/register','Auth\AuthController@postRegister');
//退出登录
Route::get('auth/logout','Auth\AuthController@getLogout');

