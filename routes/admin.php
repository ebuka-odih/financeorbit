<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');
    Route::get('security', "Admin\AdminController@security")->name('security');
    Route::post('security', "Admin\AdminController@storePassword")->name('storePassword');
    Route::post('edit/date', "Admin\AdminController@editDate")->name('editDate');
    Route::post('edit/profit', "Admin\AdminController@defundProfit")->name('defundProfit');
    Route::post('edit/balance', "Admin\AdminController@defundBal")->name('defundBal');
    Route::post('edit/trade-progress', "Admin\AdminController@tradeProg")->name('tradeProg');

    Route::get('user/details/{id}', "Admin\UserController@userDetails")->name('userDetails');
    Route::get('users', 'Admin\UserController@users')->name('users');
    Route::delete('delete/user', 'Admin\UserController@deleteUser')->name('deleteUser');
    Route::get('add-wallet', "Admin\UserController@wallet")->name('wallet');
    Route::post('add-wallet', "Admin\UserController@storeWallet")->name('storeWallet');

    Route::get('user/withdrawal/method/{id}', "Admin\UserController@userWithdrawMethod")->name('userWithdrawMethod');

    Route::get('deposits', "Admin\AdminDeposit@deposits")->name('deposit');
    Route::get('view/deposits/{id}', "Admin\AdminDeposit@view_deposit")->name('view_deposit');
    Route::get('approve/deposit/{id}', "Admin\AdminDeposit@approve_deposit")->name('approve_deposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposit@deleteDeposit")->name('deleteDeposit');
    Route::post('admin/deposit', "Admin\AdminDeposit@adminDeposit")->name('adminDeposit');

    // Withdrawal Route
    Route::get('withdrawals', "Admin\AdminWithdraw@withdrawal")->name('withdrawal');
    Route::post('withdrawal/percent/{id}', "Admin\AdminWithdraw@withdrawPercent")->name('withdrawPercent');
    Route::get('approve/withdrawal/{id}', "Admin\AdminWithdraw@approve_withdrawal")->name('approve_withdrawal');
    Route::delete('delete/withdrawal/{id}', "Admin\AdminWithdraw@delete_withdrawal")->name('delete_withdrawal');

    // Funding Route
    Route::get('fund/user', "Admin\FundingController@fund")->name('fund');
    Route::post('fund/user', "Admin\FundingController@sendFund")->name('sendFund');

    Route::get('defund/user', "Admin\AdminDefundController@debit")->name('debit');
    Route::post('defund/user', "Admin\AdminDefundController@sendDefund")->name('sendDefund');


    Route::resource('wallet', "Admin\PaymentMethodController");
    Route::resource('copy-traders', "Admin\AdminCopyTraderController");
    Route::resource('signal', "Admin\AdminSignalController");
    Route::resource('staking', "Admin\AdminStakingController");
    Route::resource('stocks', "Admin\StocksAdminController");
    Route::resource('mining', "Admin\MiningAdminController");
    Route::resource('subscription', "Admin\SubscriptionController");
    Route::resource('amazon', "Admin\AmazonAdminController");

    //Trades Routes
    Route::get('open/trades/history', "Admin\AdminTradesController@openTrades")->name('trades.open');
    Route::get('close/trades/history', "Admin\AdminTradesController@closeTrades")->name('trades.close');
    Route::post('set/trade/{id}', "Admin\AdminTradesController@setTrade")->name('setTrade');
    Route::get('close/trade/{id}', "Admin\AdminTradesController@closeTrade")->name('closeTrade');
    Route::get('view/trade/{id}', "Admin\AdminTradesController@viewTrade")->name('viewTrade');

    Route::get('suspend/trade/{id}', "Admin\UserController@suspend")->name('suspend');
    Route::get('unsuspend/user/{id}', "Admin\UserController@verifyUser")->name('verifyUser');

    Route::get('send/message', "Admin\AdminMessageController@messages")->name('message');
    Route::post('send/message', "Admin\AdminMessageController@sendMessage")->name('sendMessage');
    Route::get('edit/message/{id}', "Admin\AdminMessageController@editMessage")->name('editMessage');
    Route::patch('update/message/{id}', "Admin\AdminMessageController@updateMessage")->name('updateMessage');

//    Copy Trades Route
    Route::get('copy-trades', "Admin\InvestCopyTradeController@copiedTrades")->name('copiedTrades');
    Route::delete('delete/copy-trades/{id}', "Admin\InvestCopyTradeController@deleteTrade")->name('deleteTrade');
});
