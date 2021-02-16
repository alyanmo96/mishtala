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


Route::get('/edit_Synthetic_grass',"work_videoController@show");
Route::post('/upload_grass',"work_videoController@store");
Route::get('/grass_edit',"work_videoController@show");
Route::get('/delete_grass/{id}',"work_videoController@delete");
Route::get('/grass',"work_videoController@show_for_customers");
Route::get('/grass',"work_videoController@show_for_customers")->name('grass.show');
Route::get('/grassAddToCart/{product}',"CartController@add_item_back_to_grass")->name('grass_cart.add');



Route::get('/message',"messageController@show");
Route::get('/delete_message/{id}',"messageController@destroy");
Route::get('/people_buy',"Controller@people_buy_page_admin");
Route::get('/delete_people_buy/{id}',"Controller@destroy");

Route::get('/edit_product_by_admin/{id}',"PlantController@edit_special_product_by_admin");
Route::post('/upload_special_plant',"adminController@update_plant");
Route::get('/edit_grass_by_admin/{id}',"work_videoController@edit_special_grass_by_admin");
Route::post('/upload_special_grass',"adminController@update_grass");
Route::get('/edit_equipment_by_admin/{id}',"work_equipmentController@edit_special_work_equipment_by_admin");
Route::post('/upload_special_work_equipments',"adminController@update_work_equipment");
Route::get('/edit_gift_by_admin/{id}',"giftController@edit_special_gift_by_admin");
Route::post('/upload_special_gifts',"adminController@update_gift");
Route::get('/edit_box_by_admin/{id}',"box@edit_special_product_by_admin");
Route::post('/upload_special_box',"adminController@update_box");


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



Route::get('/plant_type_one',"PlantController@show_for_customers_one")->name('plant_type_one.show');
Route::get('/plant_type_two',"PlantController@show_for_customers_two")->name('plant_type_two.show');
Route::get('/plant_type_three',"PlantController@show_for_customers_three")->name('plant_type_three.show');
Route::get('/plant_type_four',"PlantController@show_for_customers_four")->name('plant_type_four.show');
Route::get('/plant_type_five',"PlantController@show_for_customers_five")->name('plant_type_five.show');
Route::get('/plant_type_six',"PlantController@show_for_customers_six")->name('plant_type_six.show');
Route::get('/plant_type_seven',"PlantController@show_for_customers_seven")->name('plant_type_seven.show');


Route::get('/box_type_one',"box@show_for_customers_box_one")->name('box_type_one.show');
Route::get('/box_type_two',"box@show_for_customers_box_two")->name('box_type_two.show');
Route::get('/box_type_three',"box@show_for_customers_box_three")->name('box_type_three.show');






Route::get('/cart',"CartController@index");
Route::get('/cart',"CartController@index")->name('cart.show');
Route::get('/purchase',"Controller@purchase_for_customer")->name('purchase.add');
Route::post('/d_purchase',"Controller@purchase");
Route::get('/plantAddToCart/{product}',"CartController@add_item_back_to_plant")->name('plant_cart.add');
Route::get('/giftAddToCart/{product}',"CartController@add_item_back_to_gift")->name('gift_cart.add');
Route::get('/boxAddToCart/{product}',"CartController@add_item_back_to_box")->name('box_cart.add');
Route::get('/work_equipmentAddToCart /{product}',"CartController@add_item_back_to_equpment")->name('work_equipment_cart.add');
Route::get('/delete_from_cart/{id}',"CartController@destroy");


Route::any('{any}', function () {//for any other Link
    return redirect('/');
});