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

Route::view('/', 'welcome')->name('index');
//Route::view('/stocks', 'pages.stocks')->name('stocks');
//Route::view('/forex', 'pages.forex')->name('forex');
//Route::view('/mining', 'pages.mining')->name('mining');
//Route::view('/about', 'pages.about')->name('about');
//Route::view('/contact', 'pages.contact')->name('contact');
//Route::view('/terms', 'pages.terms')->name('terms');
//Route::view('/faq', 'pages.faq')->name('faq');
//Route::view('/privacy', 'pages.privacy')->name('privacy');
//Route::view('/copy-trader', 'pages.copy-trader')->name('copy-trader');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){

    Route::get('dashboard', "UserController@dashboard")->name('dashboard');
    Route::get('assets', "UserController@assets")->name('assets');
    Route::get('account/details', "UserController@wallet")->name('wallet');
    Route::get('referrals', "UserController@all_referrals")->name('all_referrals');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::patch('update/profile', 'UserController@updateProfile')->name('updateProfile');
    Route::get('edit/profile', 'UserController@editProfile')->name('editProfile');
    Route::get('security', 'UserController@security')->name('security');
    Route::post('update/security', "UserController@updateSecurity")->name('updateSecurity');

//    Withdrawal Method
    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');
    Route::delete('delete/account/{id}', 'WithdrawMethodController@deleteWallet')->name('deleteWallet');

    Route::get('transactions', 'UserController@transactions')->name('transactions');
    Route::get('collections', 'CollectableController@collections')->name('collections');

    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');

    //  Deposits Routes
    Route::get('deposit/transactions', "DepositController@transactions")->name('deposit.transactions');
    Route::get('deposit', "DepositController@deposit")->name('deposit');
    Route::post('process/deposit', "DepositController@processDeposit")->name('processDeposit');
    Route::get('deposit/payment/QH5H3Q64{id}2GER', "DepositController@payment")->name('payment');
    Route::patch('process/payment/QH5H3Q642GER', "DepositController@processPayment")->name('processPayment');
    Route::get('cancelled/deposit/XCRTRD{id}ERTX8F&', "DepositController@cancelDeposit")->name('cancelDeposit');

    //Withdrawal Routes
    Route::get('withdraw/transactions', "WithdrawController@transactions")->name('withdraw.transactions');
    Route::get('withdraw', "WithdrawController@withdraw")->name('withdraw');
    Route::post('withdraw', "WithdrawController@processWithdraw")->name('processWithdraw');
    Route::get('WithdrawCapital', "WithdrawController@WithdrawCapital")->name('WithdrawCapital');


    Route::get('trade-room', "TradeController@trade")->name('trade');
    Route::post('place/trade-room', "TradeController@placeTrade")->name('placeTrade');
    Route::get('trade/history', "TradeController@history")->name('trade.history');
    Route::get('close/trade/history', "TradeController@closeTrades")->name('closeTrades');

    Route::get('subscription/plans', "SubscribeController@plans")->name('sub.plans');
    Route::get('myinvestment/history', "SubscribeController@history")->name('sub.history');
    Route::get('subscription/details/{id}', "SubscribeController@details")->name('sub.details');
    Route::post('process/subscription/plans', "SubscribeController@subscribe")->name('subscribe');
    Route::get('investment/details/{id}', "SubscribeController@Investdetails")->name('Investdetails');
    Route::get('subscription/success/{id}', "SubscribeController@Subsuccess")->name('Subsuccess');

    Route::resource('message', "MessageController");
    Route::resource('copy-trader', "CopyTradeController");
    Route::resource('signals', "SignalController");

    Route::get('buy', "UserController@buy")->name('buy');
    Route::get('verify', "UserController@verify")->name('verify');
    Route::patch('verify', "UserController@processVerify")->name('processVerify');
});

include 'admin.php';
