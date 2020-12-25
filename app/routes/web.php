<?php
use Illuminate\Support\Facades\Route;
/////////////////////////////////ADMIN CONTROL/////////////////////////////////////////////////////
Route::get('/admin_page', function () { return view('admin_control_page');});
Route::get('/signin', function () {return view('log_in');});
Route::post('/details',"adminController@details");
Route::get('/edit_account',"adminController@show_account");
Route::post('/edit_account',"adminController@update_account");
Route::get('/plant_edit',"PlantController@show");
Route::get('/box_edit',"box@show");
Route::get('/edit_work_photo',"work_photo@show");
Route::get('/edit_box_photo',"box@show");
Route::post('/upload_box',"box@store");
Route::get('/delete_box/{id}',"box@destroy");
Route::post('/upload_plant',"PlantController@store");
Route::get('/delete_plant/{id}',"PlantController@delete");
Route::get('/gift_edit',"giftController@show");
Route::post('/upload_gift',"giftController@store");
Route::get('/delete_gift/{id}',"giftController@delete");
Route::get('/work_equipment_edit',"work_equipmentController@show");
Route::post('/upload_work_equipment',"work_equipmentController@store");
Route::get('/delete_work_equipments/{id}',"work_equipmentController@delete");
Route::get('/work_video',"work_videoController@show");
Route::post('/upload_work_video',"work_videoController@store");
Route::post('/upload_work_photo',"work_photo@store");
Route::get('/delete_work_video/{id}',"work_videoController@delete");
Route::get('/remove_photo/{id}',"work_photo@destroy");

Route::get('/message',"messageController@show");
Route::get('/delete_message/{id}',"messageController@destroy");
Route::get('/people_buy',"Controller@people_buy_page_admin");
Route::get('/delete_people_buy/{id}',"Controller@destroy");

/////////////////////////////////NORMAL USERS///////////////////////////////////////////////////////
Route::get('/',"Controller@show_for_customers");
Route::get('/',"Controller@show_for_customers")->name('main.show');
Route::get('/home',"Controller@show_for_customers");
Route::get('/main',"Controller@show_for_customers");
Route::get('/MAIN',"Controller@show_for_customers");
Route::get('/MAin',"Controller@show_for_customers");
Route::get('/MAIn',"Controller@show_for_customers");
Route::get('/Main',"Controller@show_for_customers");
Route::get('/HOME',"Controller@show_for_customers");
Route::get('/main_cart_p/{product}',"CartController@add_item_back_to_main_p")->name('main_cart_p.add');
Route::get('/main_cart_g/{product}',"CartController@add_item_back_to_main_g")->name('main_cart_g.add');
Route::get('/main_cart_w/{product}',"CartController@add_item_back_to_main_w")->name('main_cart_w.add');

Route::get('/contact', function (){return view('contact');});
Route::get('/about', function (){return view('About');});
Route::post('/upload_message',"messageController@store");
Route::post('/search',"Controller@search");

Route::get('/plant',"PlantController@show_for_customers");
Route::get('/plant',"PlantController@show_for_customers")->name('plant.show');
Route::get('/box',"box@show_for_customers")->name('box.show');
Route::get('/gifts',"giftController@show_for_customers");
Route::get('/gifts',"giftController@show_for_customers")->name('gift.show');
Route::get('/work_equipment',"work_equipmentController@show_for_customers");
Route::get('/work_equipment',"work_equipmentController@show_for_customers")->name('work_equipment.show');
Route::get('/works',"work_videoController@show_for_customers");
Route::get('/boxs',"box@show_for_customers");



Route::get('/plant_type_two',"PlantController@show_for_customers_one")->name('plant_type_two.show');
Route::get('/plant_type_two',"PlantController@show_for_customers_two")->name('plant_type_two.show');
Route::get('/plant_type_three',"PlantController@show_for_customers_three")->name('plant_type_three.show');
Route::get('/plant_type_four',"PlantController@show_for_customers_four")->name('plant_type_four.show');



Route::get('/cart',"CartController@index");
Route::get('/cart',"CartController@index")->name('cart.show');
Route::get('/purchase',"Controller@purchase_for_customer")->name('purchase.add');
Route::post('/d_purchase',"Controller@purchase");
Route::get('/plantAddToCart/{product}',"CartController@add_item_back_to_plant")->name('plant_cart.add');
Route::get('/giftAddToCart/{product}',"CartController@add_item_back_to_gift")->name('gift_cart.add');
Route::get('/boxAddToCart/{product}',"CartController@add_item_back_to_box")->name('box_cart.add');
Route::get('/work_equipmentAddToCart /{product}',"CartController@add_item_back_to_equpment")->name('work_equipment_cart.add');
Route::get('/delete_from_cart/{id}',"CartController@destroy");
