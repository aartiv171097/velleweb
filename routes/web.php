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



// --------------------Shubham--------------------
Auth::routes(['verify'=>true]);
Route::get('password/reset/{token}/{email}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
//--------------------------------------------
// Route::get('/home', 'HomeController@index')->name('home');    

//  Route::get('/indexlogin', function() {  
//      return view('website.indexlogin');
// })->name('login');                                               
      
// Route::get('/indexsignup', function() {
//     return view('website.indexsignup');
// })->name('signup');

 // Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
 //    Route::get('/indexlogin', 'Auth\LoginController@showLoginForm')->name('login');
 //    Route::post('/login', 'Auth\LoginController@login');
 //    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
 // });
 Route::get('/',function(){
    return view('website.homes');
})->name('homes');
// Route::get('/profile',function(){
//     return view('admin.website.profile');
// });

Route::get('/camp', 'CampController@index')->name('campaign');
Route::get('/campsocial',function(){
    return view('website.campsocial');
})->name('campsocial');
Route::get('/details',function(){
    return view('website.details');
});
Route::get('/social',function(){
    return view('website.social-info');
})->name('social');
Route::get('/createcampaign',function(){
    return view('website.userdetail');
});
Route::get('/brands',function(){
    return view('website.brands');
})->name('brands');
Route::get('/aboutus',function(){
    return view('website.aboutus');
})->name('aboutus');
Route::get('/contactus',function(){
    return view('website.contactus');
})->name('contactus');

Route::get('/image_cropper',function(){
    return view('image_cropper');
})->name('image_cropper');



Route::get('/social-info',function(){
    return view('website.social-info');
})->name('socialinfo');

Route::group(['prefix'=>'social-info', 'as'=>'social-info.'], function(){
   
    Route::get('/edit', 'SocialinfoController@edit')->name('edit');
     Route::put('/{id}', 'SocialinfoController@update')->name('update');
    
});
Route::group(['prefix'=>'password', 'as'=>'password.'], function(){
   
    Route::get('/edit/{id?}', 'ProfileController@passedit')->name('edit');
    Route::put('/{id?}', 'ProfileController@passupdate')->name('update-profile');
    
});


  Route::group(['namespace' => 'AdminAuth', 'prefix'=> 'admin', 'as'=>'admin.'], function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login')->name('login');
    Route::put('/logout', 'LoginController@logout')->name('logout');
  
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    // Route::post('/register', 'RegisterController@register')->name('register.store');
  
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::put('/password/reset', 'ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('pasword.reset.token');
  
});//routes are not have admin middleware

route::view('siteadmin/dashboard','siteadmin.website.index');

Route::group(['middleware'=>['auth', 'verified'] ], function(){
    // verified
    Route::get('/profile',function(){
        return view('website.profile');
    })->name('profile');
    Route::POST('/profile/{id}', 'ProfileController@update')->name('profile.update');
   
   
});
Route::post('/createcampaign', 'DetailController@store')->name('userdetail.store');

Route::get('/viewdetail/{id}', 'DetailController@show')->name('show');
 Route::get('admin/viewdetail/{id}','DetailController@show')->name('admin.details');


 Route::get('verifyEmailFirst','Auth\RegisterController@verifyemailfirst')->name('verifyEmailFirst');
    
 Route::get('/thank',function(){
    return view('website.thanks');
})->name('thank');
Route::get('/verify',function(){
    return view('website.signverify');
})->name('verify');
