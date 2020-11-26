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
    Route::resource('testimonials','TestimonialController');
    Route::resource('pages','PageController');
    Route::resource('roles','RoleController');
    Route::resource('permissions','PermissionController');
    Route::resource('users','AdminController');
    Route::resource('settings','SettingController');
});

