<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);

$this->emitTo('cart-icon-component','refreshComponent');
    }

    public function decreaseQuantity($rowId){
        $product = Cart::instace('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instace('cart')->update($rowId,$qty);

        $this->emitTo('cart-icon-component','refreshComponent');

    }


    public function render()
    {
        return view('livewire.cart-component');
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component','refreshComponent');

        session()->flash('success_message','item has been removed!');
    }

    public function clearAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component','refreshComponent');

        session()->flash('success_message','items has been removed!');
    }
}