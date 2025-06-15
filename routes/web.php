<?php

use App\Models\Photo;
use App\Models\shipmate;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\pricingController;
use App\Http\Controllers\AppreanceController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\SellerWebsite\MainController;
use App\Http\Controllers\SellerWebsite\Electric\ElecHomeController;
use App\Http\Controllers\SellerWebsite\Ecommerce\EcomHomeController;
use App\Http\Controllers\SellerWebsite\GiftShop\GiftShopHomeController;
use App\Http\Controllers\SellerWebsite\GiftShop\GiftShopLoginController;
use App\Http\Controllers\SellerWebsite\Restaurant\RestaurantHomeController;

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "home_main"])->name('site.home');

Route::get('/pricing', [pricingController::class, "pricing"])->name('site.pricing');

// ==================================================================================================================================
// MAIN PAGE ROUTES

Route::get('/login', [LoginController::class, "sellerLogin"])->name('site.seller.seller_login');
Route::post('/login', [LoginController::class, "sellerLogin_process"]);

Route::get('/signup', [LoginController::class, "sellerSignup"])->name('site.seller.seller_signup');
Route::post('/signup', [LoginController::class, "sellerSignup_process"]);

Route::get('/signup/verify', [LoginController::class, "otpSeller"])->name('site.seller.seller_otp');
Route::post('/signup/verify', [LoginController::class, "otpSeller_process"]);

Route::get('/reset', [LoginController::class, "sellerReset"])->name('site.seller.seller_reset');
Route::post('/reset', [LoginController::class, "sellerReset_process"]);

// Route::get('/reset/verify', [LoginController::class, "resetotp"])->name('site.seller.resetotp');
// Route::post('/reset/verify', [LoginController::class, "resetotp_process"]);

// Route::get('/reset/password', [LoginController::class, "resetpassword"])->name('site.seller.resetpassword');
// Route::post('/reset/password', [LoginController::class, "resetpassword_process"]);






// =================================================================================================================================
// CLIENT DASHBOARD

Route::get('/welcome', [SellerController::class, "SellerDashboard"])->middleware("auth:shipmate")->name('site.seller.dashboard');

// =================================================================================================================================
// ORDERS OPTION, SIDE NAV, CLIENT PORTAL

Route::get('/allorder', [SellerController::class, "SellerOrder"])->middleware('preventBackHistory', 'auth')->name('site.seller.order');
Route::get('/abandoned', [SellerController::class, "SellerOrder1"])->middleware('preventBackHistory', 'auth')->name('site.seller.order1');

// =================================================================================================================================
// DELIVERY OPTION, SIDE NAV, CLIENT PORTAL

Route::get('/delivery', [SellerController::class, "SellerDelivery"])->middleware('preventBackHistory', 'auth')->name('site.seller.delivery');

// =================================================================================================================================
// APPREANCE OPTION, SIDE NAV, CLIENT PORTAL

Route::get('/themes', [SellerController::class, "sellerThemes"])->middleware('preventBackHistory', 'auth')->name('site.seller.themes');
Route::get('/theme/apply/{id}', [AppreanceController::class, "ThemeApply"])->middleware('preventBackHistory', 'auth')->name('site.seller.applytheme');
Route::get('/pages', [SellerController::class, "sellerPages"])->middleware('preventBackHistory', 'auth')->name('site.seller.pages');
Route::get('/menu', [SellerController::class, "sellerMenu"])->middleware('preventBackHistory', 'auth')->name('site.seller.menu');
Route::get('/menu/add', [AppreanceController::class, "sellerMenuAdd"])->middleware('preventBackHistory', 'auth')->name('site.seller.menuadd');
Route::post('/menu/add', [AppreanceController::class, "MenuAddProcess"])->middleware('preventBackHistory', 'auth');
Route::get('/menu/edit/{id}', [AppreanceController::class, "sellerMenuEdit"])->middleware('preventBackHistory', 'auth')->name('site.seller.menuedit');
Route::post('/menu/edit/{id}', [AppreanceController::class, "sellerMenuEditProcess"])->middleware('preventBackHistory', 'auth');
Route::get('/menu/destroy/{id}', [AppreanceController::class, "sellerMenuDestroy"])->middleware('preventBackHistory', 'auth')->name('site.seller.menudestroy');
Route::get('/blog', [SellerController::class, "sellerBlog"])->middleware('preventBackHistory', 'auth')->name('site.seller.blog');


// =================================================================================================================================
// PRODUCTS OPTION, SIDE NAV, CLIENT PORTAL
Route::get('/products', [SellerController::class, "AllProduct"])->middleware('preventBackHistory', 'auth')->name('site.seller.allproducts');
Route::get('/products/new', [SellerController::class, "ProductUpload"])->middleware('preventBackHistory', 'auth')->name('site.seller.newproducts');
Route::post('/products', [SellerController::class, "ProductUploadProcess"]);
Route::get('/categories', [SellerController::class, "sellerCategories"])->middleware('preventBackHistory', 'auth')->name('site.seller.categories');
Route::get('/inventory', [SellerController::class, "sellerInventory"])->middleware('preventBackHistory', 'auth')->name('site.seller.inventory');

// =================================================================================================================================
// ANALYTICS OPTION, SIDE NAV, CLIENT PORTAL


Route::get('/sales-analytic', [SellerController::class, "Sales"])->middleware('preventBackHistory','auth')->name('site.portal.sales');
Route::get('/traffic-analytic', [SellerController::class, "Traffic"])->middleware('preventBackHistory','auth')->name('site.portal.traffic');
Route::get('/product-analytic', [SellerController::class, "Product"])->middleware('preventBackHistory','auth')->name('site.portal.product');

// =================================================================================================================================
// PAYMENT OPTION, SIDE NAV, CLIENT PORTAL

Route::get('/payment', [SellerController::class, "Payment"])->middleware('preventBackHistory','auth')->name('site.portal.payment');


// =================================================================================================================================
// CUSTOMER OPTION, SIDE NAV, CLIENT PORTAL

Route::get('/customer', [SellerController::class, "Customer"])->middleware('preventBackHistory','auth')->name('site.portal.customer');

// =================================================================================================================================
// MY PROFILE OPTION, HEADER PROFILE SECTION, CLIENT PORTAL

Route::get('/profile', [SellerController::class, "MyProfile"])->middleware('preventBackHistory','auth')->name('site.portal.profile');
Route::post('/profile', [SellerController::class, "EditProfile"]);



// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/seller/welcome', [SellerController::class, "SellerDelivery"])->name('site.seller.dashboard');
//     //add more Routes here
// });


// CLIENT WEBSITE START HERE

// $router = app()->make('router');
// foreach($users as $user){
//     $router->get($user->link,[MainController::class, "HomePage"]);
// }


// $users = shipmate::get();
// $router = app()->make('router');
// foreach($users as $data){
//     $product_data = $data->products;
//     $photo = Photo::find($data->id);
//     $router->view($data->link, 'SellerWebsite.homepage',compact('data','photo','product_data'));
// }

//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////TEMPLATES///////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////


///////////COMMENT THIS PART WHILE MIGRATING DATABASE///////////////////////
$users = shipmate::get();
$router = app()->make('router');
foreach($users as $data){
    $router->get($data->link , [MainController::class, 'HomePage'])->name($data->link . 'homepage');

    //////////////////////////////////RESTAURANT///////////////////////////////////////////
// if ($data->theme_id == 0) {
    // $router->get($data->link , [RestaurantHomeController::class, 'HomePage'])->name($data->link . '.homepage');
    $router->get($data->link.'#book-a-table' , [MainController::class, 'HomePage'])->name($data->link . '.tablebooked');
    $router->get($data->link.'#contact' , [MainController::class, 'HomePage'])->name($data->link . '.contactsuccess');
    $router->post($data->link . '/booking', [RestaurantHomeController::class, 'Booking'])->name('booking'.$data->link);
    $router->post($data->link . '/contact', [RestaurantHomeController::class, 'Contact'])->name('contact'.$data->link);


//////////////////////////////////Ecommerce Store///////////////////////////////////////////
// if ($data->theme_id == 1) {
//     $router->get($data->link , [EcomHomeController::class, 'HexaShop'])->name($data->link . '.homepage');
    Route::view($data->link . '/single-page', 'SellerWebsite.HexaShop.single-product');
    Route::view($data->link . '/products-page', 'SellerWebsite.HexaShop.products');
    Route::view($data->link . '/about-page', 'SellerWebsite.HexaShop.about');
    Route::view($data->link . '/contact-page', 'SellerWebsite.HexaShop.contact');
// }

//////////////////////////////////Electric Shop///////////////////////////////////////////
// if ($data->theme_id == 2) {
    // $router->get($data->link , [ElecHomeController::class, 'ElecShop'])->name($data->link . '.homepage');
// }

//////////////////////////////////Gift Shop///////////////////////////////////////////
// if ($data->theme_id == 3) {
//     $router->get($data->link , [GiftShopHomeController::class, 'GiftShop'])->name('giftshop');

Route::get($data->link . '/login', [GiftShopLoginController::class, "Login"])->name($data->link . 'giftshop.login');
Route::post($data->link . '/login', [GiftShopLoginController::class, "Login_process"]);
Route::get($data->link . '/signup', [GiftShopLoginController::class, "Signup"])->name($data->link . 'giftshop.signup');
Route::post($data->link . '/signup', [GiftShopLoginController::class, "Signup_process"]);
Route::get($data->link . '/signup/verify', [GiftShopLoginController::class, "otp"])->name($data->link . 'giftshop.otp');
Route::post($data->link . '/signup/verify', [GiftShopLoginController::class, "otp_process"]);
Route::get($data->link . '/reset', [GiftShopLoginController::class, "Reset"])->name($data->link . 'giftshop.reset');
Route::post($data->link . '/reset', [GiftShopLoginController::class, "Reset_process"]);
Route::get($data->link . '/reset/verify', [GiftShopLoginController::class, "resetotp"])->name($data->link . 'giftshop.resetotp');
Route::post($data->link . '/reset/verify', [GiftShopLoginController::class, "resetotp_process"]);
Route::get($data->link . '/reset/password', [GiftShopLoginController::class, "resetpassword"])->name($data->link . 'giftshop.resetpassword');
Route::post($data->link . '/reset/password', [GiftShopLoginController::class, "resetpassword_process"]);

Route::get($data->link . '/dashboard', [GiftShopHomeController::class, "Dashboard"])->middleware("auth:giftshop")->name($data->link . 'giftshop.dashboard');
    Route::get($data->link . '/about', [GiftShopHomeController::class, "About"])->name($data->link . 'giftshop.about');
    Route::get($data->link . '/contact', [GiftShopHomeController::class, "Contact"])->name($data->link . 'giftshop.contact');
    Route::get($data->link . '/product', [GiftShopHomeController::class, "Product"])->name($data->link . 'giftshop.product');
    Route::get($data->link . '/detail', [GiftShopHomeController::class, "Detail"])->name($data->link . 'giftshop.detail');
    Route::get($data->link . '/cart', [GiftShopHomeController::class, "Cart"])->name($data->link . 'giftshop.cart');

}
// }
//////////////////////////////////////////////////////////////////////////////////////








//////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////PROJECT END///////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////

// Route::get('/{link}', [MainController::class, 'HomePage'])->name('homepage');
// Route::post('/{link}', [MainController::class, 'Booking']);
// Route::post('/contact', [MainController::class, 'Contact'])->name('site.contact');




// Route::get('upload-image', [UploadImageController::class, 'index']);
// Route::post('save', [UploadImageController::class, 'save']);

// Route::get('/testroute', function() {
//     $details = [
//         'title' => 'HI,',
//         'body' => 'Your Otp to verify account is 123456.'
//     ];
//     // The email sending is done using the to method on the Mail facade
//     Mail::to('ashokpoudel34.in@gmail.com')->send(new MyTestEmail($details));
//     dd("Email is Sent.");

// });

