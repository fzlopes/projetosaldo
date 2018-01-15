<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    Route::post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    Route::get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');
    Route::post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();


