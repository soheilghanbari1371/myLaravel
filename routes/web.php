<?php

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
Auth::routes();
Route::get('/', function () {
    return view('userlogin');
});

Route::get('/login', function () {
    return view('userlogin');
})->name('login');
Route::get('/user_logout', 'UserLoginController@logout');
Route::post('/check_user', 'UserLoginController@login');
Route::post('/user_register', 'UserRegisterController@register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('user_dashboard', 'UserDashboardController@dashboard');
    Route::post('insert/advertisement', 'AdvertisementsController@insert');
    Route::get('user_ads_detail/{id}', 'AdvertisementsController@getAd');
    Route::post('search/crypto_list', 'AdvertisementsController@searchFilteredList');
    Route::get('crypto/item/{id}', 'AdvertisementsController@searchItem');
    Route::post('deal/set_warranty/{id}', 'DealBuyerController@set_warranty');
    Route::post('deal/set_release/{id}', 'DealBuyerController@set_release');//need middleware
    Route::post('deal/set_cancel/{id}', 'DealBuyerController@set_cancel');//need middleware
    Route::post('deal/set_request/{id}', 'DealBuyerController@set_request');//need middleware
    Route::get('deal/set_accept/{id}', 'AdvertisementsController@setAccept');//need middleware
    Route::get('deal/sell_advertisement/{id}', 'AdvertisementsController@sellAdvertisement');
    Route::get('deal/buy_advertisement/{id}', 'DealBuyerController@buyAdvertisement');
    Route::get('my/crypto/advertisements', 'AdvertisementsController@getMyAdvertisements');
    Route::get('my/crypto/advertisements/{id}', 'AdvertisementsController@getMyAdvertisementItem');
    Route::get('my/crypto/requests', 'DealBuyerController@getMyRequests');
    Route::post('buyer/set/chat/item', 'ChatUserController@setBuyerDealMessage');
    Route::post('seller/set/chat/item', 'ChatUserController@setSellerDealMessage');
    Route::get('user/new/ticket', 'TicketController@newTicket');
    Route::post('user/set/new/ticket', 'TicketController@setNewTicket');
    Route::post('user/set/new/ticketchat', 'TicketController@setNewTicketChat');
    Route::get('user/tickets/list', 'TicketController@ticketList');
    Route::get('user/ticket/detail/{id}', 'TicketController@ticketChatroom');
    Route::get('user/history/buy', 'UserHistoryController@buyHistory');
    Route::get('user/history/sell', 'UserHistoryController@sellHistory');
    Route::get('user/history/deposite', 'UserHistoryController@depositeHistory');
    Route::get('user/history/whitdraw', 'UserHistoryController@withdrawHistory');
    Route::get('user/authentication/form', 'UserProfileController@authUserData');
    Route::post('user/fill/user/data', 'UserProfileController@fillUserData');
    Route::get('user/profile/page', 'UserProfileController@showUserProfile');










});
