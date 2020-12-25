<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Cart
{
    public $items = [];
    public $totalQty;
    public $total_price;

    public function __Construct($old_cart=null)
    {
        if($old_cart)
        {
            $this->items = $old_cart->items;
            $this->totalQty = $old_cart->totalQty;
            $this->total_price = $old_cart->total_price;
        }else{
            $this->items = [];
            $this->totalQty = 0;
            $this->total_price = 0;
        }
    }

    public function add($product)
    {
        $item = [
            'id'=>$product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'qty'=>0,
            'image'=>$product->image
        ];
        if(!array_key_exists($product->id,$this->items)){
            $this->items[$product->id] = $item;
            $this->totalQty += 1;
            $this->total_price += $product->price;
        }else{
            $this->totalQty += 1;
            $this->total_price += $product->price;
        }
        $this->items[$product->id]['qty'] += 1; 
    }
}

