<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\gift;
use App\Models\work_equipment;
use App\Models\Cart;
use App\Models\Box_photo_sell;

class CartController extends Controller
{
    public function index()
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = null;
        }
        return view('cart',compact('cart'));
    }

    public function addItem(Plant $product)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
        return redirect()->route('plant.show')->with('success','הוסף בהצלחה');
    }
//////////////////////////////////////////////////////////////////////////
    public function add_item_back_to_main_p(Plant $product)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
        return redirect()->route('main.show')->with('success','הוסף בהצלחה');
    }
    //////////////////////////////////////////////////////////////////////////
        public function add_item_back_to_main_g(gift $product)
        {
            if(session()->has('cart')){
                $cart = new Cart(session()->get('cart'));
            }else{
                $cart = new Cart();
            }
            $cart->add($product);
            session()->put('cart',$cart);
            return redirect()->route('main.show')->with('success','הוסף בהצלחה');
        }
    //////////////////////////////////////////////////////////////////////////
    public function add_item_back_to_main_w(work_equipment $product)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
        return redirect()->route('main.show')->with('success','הוסף בהצלחה');
    }
    //////////////////////////////////////////////////////////////////////////
    public function add_item_back_to_plant(Plant $product)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
        return redirect()->route('plant.show')->with('success','הוסף בהצלחה');
    }
    //////////////////////////////////////////////////////////////////////////
    public function add_item_back_to_gift(gift $product)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
        return redirect()->route('gift.show')->with('success','הוסף בהצלחה');
    }
    
    //////////////////////////////////////////////////////////////////////////
    public function add_item_back_to_equpment(work_equipment $product)
    {
        if(session()->has('cart')){
            $cart = new Cart(session()->get('cart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);        
        return redirect()->route('work_equipment.show')->with('success','הוסף בהצלחה');
    }  

//////////////////////////////////////////////////////////////////////////
public function add_item_back_to_box(Box_photo_sell $product)
{
    if(session()->has('cart')){
        $cart = new Cart(session()->get('cart'));
    }else{
        $cart = new Cart();
    }
    $cart->add($product);
    session()->put('cart',$cart);
    return redirect()->route('box.show')->with('success','הוסף בהצלחה');
}
//////////////////////////////////////////////////////////////////////////
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $id= (int)$ID;

        //1 take the cart from session
        $cart = new Cart(session()->get('cart'));

        //2 delete cart from session after we save it as a variable
        session()->forget('cart', 'default');

        //3 delete an special item from array.
        $object = json_decode(json_encode($cart));
        $object_items=$object->items;
        $total_price=$object->total_price;
        $total_new_price;
        $total_quantity=$object->totalQty-1;
        $j=json_decode(json_encode($object_items),true);
        $check_if_selected_more_than_one=-1;
        session()->put('cart_delete_product_id', $id);
        if($j[$id]['qty']>1){
            $check_if_selected_more_than_one=1;
            $item_id=$j[$id]['id'];
            $item_name=$j[$id]['name'];
            $item_description=$j[$id]['description'];
            $item_price=$j[$id]['price'];
            $item_qty=$j[$id]['qty']-1;
            $item_image=$j[$id]['image'];
            $item = [
                'id'=>$item_id,
                'name' => $item_name,
                'description' => $item_description,
                'price' => $item_price,
                'qty'=>$item_qty,
                'image'=>$item_image
            ];
            $j[$id]=$item;
        }
        $new_object_items=$j;
        if($check_if_selected_more_than_one==-1){
            $new_object_items=array_filter($j,function($data){
                return $data['id']!=session()->get('cart_delete_product_id');
            });
        }
        $total_new_price=$total_price-$j[$id]['price'];
        session()->forget('cart_delete_product_id', 'default');
        $new_session_cart = new Cart();
        $new_session_cart->items=$new_object_items;
        $new_session_cart->totalQty=$total_quantity;
        $new_session_cart->total_price=$total_new_price;
    
        //4, need to be the new cart
        session()->put('cart', $new_session_cart);
        return redirect()->route('cart.show')->with('delete_success','נמחק בהצלחה');
    }      
}