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

    /* public function add($item, $id){ */
    /*     $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item]; */
    /*     /1* dd($storedItem); *1/ */
    /*     if ($this->items){ */
    /*         if(array_key_exists($id, $this->items)) { */
    /*             $storedItem = $this->items[$id]; */
    /*         } */
    /*     } */
    /*     $storedItem['qty']++; */
    /*     $storedItem['price'] = $item->price * $storedItem['qty']; */
    /*     $this->items[$id] = $storedItem; */
    /*     $this->totalQty++; */
    /*     $this->totalPrice += $item->price; */
    /* } */
    public function add($item, $id, $size){
        $storedItem = ['qty' => 0, 'size' => $size, 'price' => $item->price, 'item' => $item];
        /* dd($storedItem); */
        $fullId = $id.$size;
        if ($this->items){
            if(array_key_exists($fullId, $this->items)) {
                $storedItem = $this->items[$fullId];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'] * $size;
        $this->items[$fullId] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
