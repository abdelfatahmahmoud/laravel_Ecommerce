<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class FromWishlistComponent extends Component
{

    public function removeWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id==$product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-component','refreshComponent');
                return;
            }
        }
    }


    public function render()
    {
        return view('livewire.from-wishlist-component');
    }
}
