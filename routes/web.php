<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\SslCommerzPaymentController;

session_start();
use Illuminate\Support\Facades\App;
App::setLocale(isset($_SESSION['locale']) ? $_SESSION['locale'] : 'en');
//GoogleTranslate::getAvailableTranslationsFor(isset($_SESSION['locale']) ? $_SESSION['locale'] : 'en');
//GoogleTranslate::translate('Hello world');



use App\Http\Controllers\AjaxController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\UmrahController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ReportController;
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
Route::get('frontend/{page?}', [FrontendController::class, 'fronted_page']);

Route::get('package/category/{id}', [FrontendController::class, 'category_package_page']);
Route::get('package/subcategory/{id}', [FrontendController::class, 'subcategory_package_page']);
Route::post('package/search/', [FrontendController::class, 'search_package_page']);
Route::get('package/single/{id}', [FrontendController::class, 'package_single_page']);

//Route::get('visa/single/{id}', [FrontendController::class, 'ticket_page']);
Route::post('message/insert/function', [FrontendController::class, 'message_function']);
Route::post('subscriber/insert/function', [FrontendController::class, 'subscriber_function']);
Route::post('review/insert/function', [FrontendController::class, 'review_function']);



Route::post('ticket/insert/function', [FrontendController::class, 'ticket_function']);
Route::post('hotel/insert/function', [FrontendController::class, 'hotel_function']);





Route::get('payment/online/page/{id?}', [FrontendController::class, 'online_payment_page']);
Route::get('payment/offline/page/{id?}', [FrontendController::class, 'offline_payment_page']);
Route::post('payment/offline/function', [FrontendController::class, 'offline_payment_function']);


Route::get('language/{locale}', function(string $locale){
	if (! in_array($locale, ['en', 'bn'])) {
        abort(400);
    }
	$_SESSION['locale'] = $locale;
	return back()->with('success', 'language chaange successfull.');
});



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END





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
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('verified');
Route::get('/dashboard/order/loop/', [HomeController::class, 'order_page'])->middleware('verified');
Route::get('/dashboard/order/conform/{id}', [OrderController::class, 'order_conform'])->middleware('verified');
Route::get('/dashboard/order/delete/{id}', [OrderController::class, 'order_delete'])->middleware('verified');


Route::get('/dashboard/review/loop/', [HomeController::class, 'review_page'])->middleware('verified');
Route::get('/dashboard/review/conform/{id}', [ReviewController::class, 'review_conform'])->middleware('verified');
Route::get('/dashboard/review/delete/{id}', [ReviewController::class, 'review_delete'])->middleware('verified');




Route::get('/dashboard/message/loop/', [HomeController::class, 'message_page'])->middleware('verified');
Route::get('/dashboard/message/conform/{id}', [MessageController::class, 'message_conform'])->middleware('verified');
Route::get('/dashboard/message/delete/{id}', [MessageController::class, 'message_delete'])->middleware('verified');



Route::get('/dashboard/air_tickets/loop/', [HomeController::class, 'ticket_page'])->middleware('verified');
Route::get('/dashboard/air_tickets/conform/{id}', [TicketController::class, 'ticket_conform'])->middleware('verified');
Route::get('/dashboard/air_tickets/delete/{id}', [TicketController::class, 'ticket_delete'])->middleware('verified');



Route::get('/dashboard/hotel/loop/', [HomeController::class, 'hotel_page'])->middleware('verified');
Route::get('/dashboard/hotel/conform/{id}', [HotelController::class, 'hotel_conform'])->middleware('verified');
Route::get('/dashboard/hotel/delete/{id}', [HotelController::class, 'hotel_delete'])->middleware('verified');





Route::get('/dashboard/subscriber/loop/', [HomeController::class, 'subscriber_page'])->middleware('verified');
Route::get('/dashboard/subscriber/conform/{id}', [SubscriberController::class, 'subscriber_conform'])->middleware('verified');
Route::get('/dashboard/subscriber/delete/{id}', [SubscriberController::class, 'subscriber_delete'])->middleware('verified');


Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');


Route::post('user/info/update/{id}', [UserController::class, 'update_function'])->middleware('verified');



#sub Ckeditor
Route::get('ckeditor', [CkeditorController::class, 'index']);
Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

#Ajax
Route::prefix('/dashboard/ajax')->group(function(){
	Route::get('/get/subcategory/data', [AjaxController::class, 'subGetByAjax']);
	Route::get('/get/cities/data', [AjaxController::class, 'citiesGetByAjax']);
});


#Setting
Route::prefix('/dashboard/setting')->group(function(){
	Route::get('/update/page/', [SettingController::class, 'update_page']);
	Route::post('/update/function/', [SettingController::class, 'update_function']);
});
#About
Route::prefix('/dashboard/about')->group(function(){
	Route::get('/update/page/', [AboutController::class, 'update_page']);
	Route::post('/update/function/', [AboutController::class, 'update_function']);
});
#contact
Route::prefix('/dashboard/contact')->group(function(){
	Route::get('/update/page/', [ContactController::class, 'update_page']);
	Route::post('/update/function/', [ContactController::class, 'update_function']);
});
#umrah
Route::prefix('/dashboard/umrah')->group(function(){
	Route::get('/update/page/', [UmrahController::class, 'update_page']);
	Route::post('/update/function/', [UmrahController::class, 'update_function']);
});


#carousel
Route::prefix('/dashboard/carousel')->group(function(){
	Route::get('/insert/page/', [CarouselController::class, 'insert_page']);
	Route::post('/insert/function/', [CarouselController::class, 'insert_function']);
	Route::get('/loop', [CarouselController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [CarouselController::class, 'update_page']);
	Route::post('/update/function/{id}/', [CarouselController::class, 'update_function']);
	Route::get('/remove/{id}/', [CarouselController::class, 'remove_function']);
});

#category
Route::prefix('/dashboard/category')->group(function(){
	Route::get('/insert/page/', [CategoryController::class, 'insert_page']);
	Route::post('/insert/function/', [CategoryController::class, 'insert_function']);
	Route::get('/loop', [CategoryController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [CategoryController::class, 'update_page']);
	Route::post('/update/function/{id}/', [CategoryController::class, 'update_function']);
	Route::get('/remove/{id}/', [CategoryController::class, 'remove_function']);
});
#subcategory
Route::prefix('/dashboard/subcategory')->group(function(){
	Route::get('/insert/page/', [SubcategoryController::class, 'insert_page']);
	Route::post('/insert/function/', [SubcategoryController::class, 'insert_function']);
	Route::get('/loop', [SubcategoryController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [SubcategoryController::class, 'update_page']);
	Route::post('/update/function/{id}/', [SubcategoryController::class, 'update_function']);
	Route::get('/remove/{id}/', [SubcategoryController::class, 'remove_function']);
});
#Membership
Route::prefix('/dashboard/membership')->group(function(){
	Route::get('/insert/page/', [MembershipController::class, 'insert_page']);
	Route::post('/insert/function/', [MembershipController::class, 'insert_function']);
	Route::get('/loop', [MembershipController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [MembershipController::class, 'update_page']);
	Route::post('/update/function/{id}/', [MembershipController::class, 'update_function']);
	Route::get('/remove/{id}/', [MembershipController::class, 'remove_function']);
});
#service
Route::prefix('/dashboard/service')->group(function(){
	Route::get('/insert/page/', [ServiceController::class, 'insert_page']);
	Route::post('/insert/function/', [ServiceController::class, 'insert_function']);
	Route::get('/loop', [ServiceController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [ServiceController::class, 'update_page']);
	Route::post('/update/function/{id}/', [ServiceController::class, 'update_function']);
	Route::get('/remove/{id}/', [ServiceController::class, 'remove_function']);
});
#visa
Route::prefix('/dashboard/visa')->group(function(){
	Route::get('/insert/page/', [VisaController::class, 'insert_page']);
	Route::post('/insert/function/', [VisaController::class, 'insert_function']);
	Route::get('/loop', [VisaController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [VisaController::class, 'update_page']);
	Route::post('/update/function/{id}/', [VisaController::class, 'update_function']);
	Route::get('/remove/{id}/', [VisaController::class, 'remove_function']);
});
#package
Route::prefix('/dashboard/package')->group(function(){
	Route::get('/insert/page/', [PackageController::class, 'insert_page']);
	Route::post('/insert/function/', [PackageController::class, 'insert_function']);
	Route::get('/loop', [PackageController::class, 'loop_page']);
	Route::get('/update/page/{id}/', [PackageController::class, 'update_page']);
	Route::post('/update/function/{id}/', [PackageController::class, 'update_function']);
	Route::get('/remove/{id}/', [PackageController::class, 'remove_function']);
});

Route::resource('coupon', CouponController::class)->middleware('verified');

Route::get('/report/income/', [ReportController::class, 'showReports']);