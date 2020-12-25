<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Plant;
use App\Models\gift;
use App\Models\Cart;
use App\Models\work_equipment;
use App\Models\purchase;
use Session;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show_for_customers()
    {
        $planets = Plant::all();
        $gifts = gift::all();
        $work_equipments = work_equipment::all();    
            
        return view('main',['planet'=>$planets,'work_equipment'=>$work_equipments,'gift'=>$gifts]);
    }

    public function add_to_customer_cart(REQUEST $request, $id)
    {
        $plant = Plant::find($id);
        $old_cart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($old_cart);
        $cart->add_new_item($plant, $plant->id);
        $request->session()->put('cart',$cart);

        dd($request->session()->get('cart'));
        return redirect()->route('/help');
    }

    public function purchase_for_customer(){
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            return view('main');
        }
        return view('purchase',compact('cart'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function purchase(Request $request){  
        $value = Session::get('cart');
        $json = json_encode($value);
        $Purchase = new purchase();
        $Purchase->name=$request->input('name');
        $Purchase->email=$request->input('email');
        $Purchase->phone=$request->input('phone');
        $Purchase->location=$request->input('address');
        $Purchase->cart=$json;
        $Purchase->save();
        session()->forget('cart', 'default');
        return redirect()->route('main.show')->with('purchase_success','הקנייה בוצעה בהצלחה');  
    }

    public function people_buy_page_admin()
    {
        $Purchases = purchase::all();
        
        return view('purchase_list',['purchase'=>$Purchases]);
    }

    public function purchase_of_people(){
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            return view('main');
        }
        return view('purchase_list',compact('cart'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message = purchase::find($id);
        $message->delete();
        return redirect('/people_buy');
    }
    public function search(Request $request){
        $column = 'name';
        if(Plant::where($column , '=', $request->input('search'))->first()){
            $plant = Plant::where($column , '=', $request->input('search'))->first();
            return view('search_page',['product'=>$plant]);
        }elseif(gift::where($column , '=', $request->input('search'))->first()){
            $gift=gift::where($column , '=', $request->input('search'))->first();
            return view('search_page',['product'=>$gift]);
        }elseif(work_equipment::where($column , '=', $request->input('search'))->first()){
            $work_equipment=work_equipment::where($column , '=', $request->input('search'))->first();
            return view('search_page',['product'=>$work_equipment]);
        }else{
           return redirect()->route('main.show')->with('nothing_to_show','אין מוצר כזה');  
        }
    }
}