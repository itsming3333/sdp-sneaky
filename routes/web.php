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

//Prototyping
Route::get('/p_adressbook', 'PrototypeCtr@tryAdressbook');
Route::get('/p_cart', 'PrototypeCtr@tryCart');
Route::get('/p_chat', 'PrototypeCtr@tryChat');
Route::get('/p_dashboardacc', 'PrototypeCtr@tryDashboardacc');
Route::get('/p_detailshop', 'PrototypeCtr@tryDetailshop');
Route::get('/p_dhistory', 'PrototypeCtr@tryDhistory');
Route::get('/p_dpost', 'PrototypeCtr@tryDpost');
Route::get('/p_editacc', 'PrototypeCtr@tryEditAcc');
Route::get('/p_editpost', 'PrototypeCtr@');
Route::get('/p_forum', 'PrototypeCtr@tryForum');
Route::get('/p_home', 'PrototypeCtr@tryHome');
Route::get('/p_login', 'PrototypeCtr@tryLogin');
Route::get('/p_mypost', 'PrototypeCtr@tryMypost');
Route::get('/p_orderhistory', 'PrototypeCtr@tryOrderhistory');
Route::get('/p_payment', 'PrototypeCtr@tryPayment');
Route::get('/p_post', 'PrototypeCtr@tryPost');
Route::get('/p_retur', 'PrototypeCtr@tryRetur');
Route::get('/p_reviewcart', 'PrototypeCtr@tryReviewcart');
Route::get('/p_shippinginfo', 'PrototypeCtr@tryShippinginfo');
Route::get('/p_shippingmethod', 'PrototypeCtr@tryShippingmethod');
Route::get('/p_shop', 'PrototypeCtr@tryShop');
Route::get('/p_signup', 'PrototypeCtr@trySignup');
Route::get('/p_ver_signup', 'PrototypeCtr@tryVer_signup');
Route::get('/p_wishlist', 'PrototypeCtr@tryWishlist');
