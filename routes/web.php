<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
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

Route::get('/', [FrontendController::class, 'index_page']);

/*
# Email Verification
*/
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
	return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');


#sub Ckeditor
Route::get('ckeditor', [CkeditorController::class, 'index']);
Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

#Setting
Route::prefix('/dashboard/setting')->group(function(){
	Route::get('/update/page/', [SettingController::class, 'update_page']);
	Route::post('/update/function/', [SettingController::class, 'update_function']);
});

#category
Route::prefix('/dashboard/category')->group(function(){
	Route::get('/insert/page', [CategoryController::class, 'insert_page'])->middleware('verified');
	Route::post('/insert/function', [CategoryController::class, 'insert_function'])->middleware('verified');
	Route::get('/loop', [CategoryController::class, 'loop_page'])->middleware('verified');
	Route::get('/update/page/{id}', [CategoryController::class, 'update_page'])->middleware('verified');
	Route::post('/update/function/{id}', [CategoryController::class, 'update_function'])->middleware('verified');
	Route::get('/remove/{id}', [CategoryController::class, 'remove_function'])->middleware('verified');
});

#Ajax
Route::prefix('/dashboard/ajax')->group(function(){
	Route::post('/get/subcategory/data', [AjaxController::class, 'subGetByAjax'])->middleware('verified');
});
