<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// 必选参数
    //单个
// Route::get('user/{id}', function ($id) {
//     return 'user => '.$id;
// });
    //多个
// Route::get('name/{post}/id/{comment}', function ($postId, $commentId) {
//     return $postId.'==='.$commentId;
// });

//可选参数
// Route::get('name/{user?}', function($user = null){
//     return $user;
// });
    //或直接赋默认值
// Route::get('name/{user?}', function($user = 'jack'){
//     return $user;
// });

//命名路由
    //命名路由为生成 URL 或重定向提供了便利。
    //实现也很简单，在路由定义之后通过使用 name 方法链的方式来实现
// Route::get('user/profile', function () {
//   //为命名路由生成URL
//   //$url = route('profile');
// })->name('profile');
    //也可以为控制器动作指定路由名称
// Route::get('user/profile', 'HomeController@index')->name('index');

// //如果命名路由定义了参数，可以将该参数作为第二个参数传递给 route 函数。
// //给定的路由参数将会自动插入到 URL 中
// Route::get('user/{id}/profile', ['as' => 'profile', function ($id) {
//     $url = route('profile', ['id' => $id]);
//     return $url;
// }]);

Route::get('user', 'UserController@showProfile');

//TestController
Route::resource('/test', 'TestController');

// use App\Http\Middleware\CheckAge;
// //将中间件分配到路由
// Route::get('/home', function () {
//    return 'xxxxxxxxx';
// })->middleware('home');

// Route::get('api/users/{user}', function (App\User $user) {
//     return $user;
// });


Route::get('/home', function () {
    return view('home',['name'=>'我是分配过来的变量']);
});


Route::get('/', function () {
    return view('welcome');
});
//到 指定的控制器下的 @ 指定的方法
//Route::get('/home', 'HomeController@index');

// //到 指定的控制器
// Route::resource('/admin', 'AdminController');

//到 指定的 模板文件
Route::get('/element1', function () {
    return view('home.index');
});
Route::get('/element2', function () {
    return view('index2');
});
Route::get('/element3', function () {
    return view('index3');
});
