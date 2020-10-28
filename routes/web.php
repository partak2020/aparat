<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.main.mainPage');
})->name('home');

Route::get('/upload', function () {
    return view('user.video.upload');
})->name('upload');

Route::get('/channel', function () {
    return view('user.channel.channel');
})->name('channel');

Auth::routes();

Route::get('/Administrator', function () {
    return view('admin/layouts/dashboardlayout');
});

Route::prefix('admin')->group(function(){
    Route::get('/users','user\UserController@index')->name('admin.users.index');
    Route::get('/videos','video\VideoController@index')->name('admin.videos.index');
    Route::get('/categories','aparatcategory\CategoryController@index')->name('admin.aparatcategories.index');
    Route::get('/comments','videocomment\CommentController@index')->name('admin.videocomments.index');
    Route::get('/playlists','playlist\PlaylistController@index')->name('admin.playlists.index');
});
// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/password/update/phone', 'Auth\ResetPasswordController@resetPasswordPhone')
    ->name('password.update.withphone');

Route::get('/password/reset/phone', function () {
    return view('auth.passwords.resetWithPhone');
})->name('password.reset.phone');

Route::get('/password/reset/username', function () {
    return view('auth.passwords.emailOrPhone');
})->name('password.reset.username');

Route::post('password/reset/with/phone', 'Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.reset.with.phone');

Route::post('password/reset/with/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.reset.with.email');

    
Route::get('/codeValidateion', 'Auth\ResetPasswordController@showGetCodeForm')->name('code.validation');

Route::post('/password/checkCode', 'Auth\ResetPasswordController@checkCode')->name('password.check.code');


