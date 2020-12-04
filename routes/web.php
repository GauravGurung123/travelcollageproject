<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;
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
    return view('welcome');
});
Route::get('/',[
'uses'=>'Frontend\HomeController@index',
'as'=>'home',
]);

Auth::routes();
// Route::get('/dashboard',[
// 'uses'=>'Admin\DashboardController@index',
// 'as'=>'admin.',
// 'middleware'=>['web']
// ]);
// Route::get('country', [UserController::class, 'index']);
// Route::resources([
//     'index' => CountryController::class,
// ]);



//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('admin.index');
//})->name('dashboard');
Route::group(['namespace' => 'Admin','prefix'=>'dashboard','as'=>'admin.','middleware'=>['auth:web', 'verified']], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('countries','CountryController');
    Route::resource('packages','PackageController');
    Route::resource('blogs','BlogController');
    Route::resource('visitors','VisitorController');
    Route::resource('testemonials','TestemonialController');
    Route::resource('pages','PageController');
    Route::resource('roles','RoleController');
    Route::resource('permissions','PermissionController');
    Route::resource('users','AdminController');
    Route::resource('visitors','VisitorController');
    Route::resource('settings','SettingsController');
});


Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::namespace('Auth')->group(function () {
    Route::get('/sign-in','LoginController@loginForm')->name('signin');
    Route::post('/sign-in','LoginController@process_login')->name('signin');
    Route::get('/sign-up','LoginController@show_signup_form')->name('signup');
    Route::post('/sign-up','LoginController@process_signup')->name('signup');
    Route::post('/signout','LoginController@logout')->name('signout');
});

Route::group(['namespace' => 'App\Http\Controllers\Dashboard', 'middleware' => ['auth:visitors'], 'prefix' => 'system', 'as' => 'dashboard.'], function () {
    Route::get('/change-password', function () {
        abort(404);
    })->name('change');
    Route::patch('/change-password', 'UserController@changePassword')->name('change.password');

    Route::group(['middleware' => 'visitor'], function () {
        Route::get('/visitor', 'VisitorController@index')->name('visitor');
        Route::patch('/visitor/{user}', 'VisitorController@saveProfile')->name('visitor.save.profile');
        Route::post('/blog', 'visitorController@addBlog')->name('visitor.add.blog');
        Route::get('/blog/{id}/edit', 'visitorController@editBlog')->name('visitor.edit.bkog');
        Route::patch('/blog/{id}', 'visitorController@updateBlog')->name('visitor.update.blog');
 
        Route::delete('/blog/{id}/delete', 'visitorController@deleteBlog')->name('visitor.delete.blog');
    });
});