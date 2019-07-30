<?php

namespace App;

class Cart 
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    
    public function getTotalPrice(){
        $sum = 0;
        foreach($this->items as $item) {
            $sum += $item['price'];
        }
        return $sum;
    }
    public function add($item, $id, $size){
        /* $storedItem = ['qty' => 0, 'size' => $size, 'price' => $item->price, 'item' => $item]; */
        $storedItem = ['qty' => 0, 'size' => $size, 'price' => 0, 'item' => $item];
        /* dd($storedItem); */
        $fullId = $id."-".$size;
        if ($this->items){
            if(array_key_exists($fullId, $this->items)) {
                $storedItem = $this->items[$fullId];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'] * $storedItem['size'];
        $this->items[$fullId] = $storedItem;
        $this->totalQty++;
        $this->totalPrice = $this->getTotalPrice();
        /* dd($this->totalPrice); */
    }
    public function delete($id_name){
        if(array_key_exists($id_name, $this->items)) {
            $qty = $this->items[$id_name]['qty'];
            $this->totalQty -= $qty;
            unset($this->items[$id_name]);
            $this->totalPrice = $this->getTotalPrice();
        }
    }
    public function change($id, $key, $product, $size){
        if ($this->items[$id]['qty'] > 1){
            /* dd($this->items[$id]['qty']); */
            if($key == 'down'){
                $this->items[$id]['qty'] -=1;
                $this->totalQty -= 1;
            }
        }
        if($key == 'up'){
            $this->items[$id]['qty'] +=1;
            $this->totalQty += 1;
        }

        $qty = $this->items[$id]['qty'];
        $price = $product->price;
        $this->items[$id]['price'] = $price * $qty * $size;
        $this->totalPrice = $this->getTotalPrice();
    }
}
