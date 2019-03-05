<?php


Route::get('/',function(){
    return redirect()->route('admin.login');
})->name('index');

Route::namespace('Admin')->group(function () {
    Route::view('/dashboard','siteadmin.website.index')->name('dashboard');
    //  Route::view('/users','siteadmin.website.users')->name('users');
    Route::view('/detailsreq','siteadmin.website.detailsreq')->name('detailsreq');

    Route::get('/users','UsersController@index')->name('users');
    Route::get('/detailsreq','DetailController@index')->name('request');
    //  Route::get('/viewdetail/{id}','DetailController@show')->name('details');

    Route::get('/{id}/campaign','CampaignController@index')->name('campaign');
});
