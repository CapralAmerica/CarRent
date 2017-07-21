<?php



Route::get('/', [
    'uses'=>'PagesController@indexPage',
    'as'=>'welcome'
]);

Route::get('price', [
    'uses'=>'PagesController@pricePage',
    'as'=>'models'
]);

Route::get('about-us', [
    'uses'=>'PagesController@aboutUsPage',
    'as'=>'about-us'
]);

Route::get('contact-us', [
    'uses'=>'PagesController@contactUsPage',
    'as'=>'contact-us'
]);

Route::post('contact-us', [
    'uses'=>'PagesController@contactUsPost',
    'as'=>'contact-us-post'
]);