<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sitting;
use Livewire\Component;
use Cart;
class HomeComponent extends Component
{
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $slides = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $fproducts = Product::where('featured',1)->inRandomOrder()->get()->take(8);
        $populars = Category::where('is_popular',1)->inRandomOrder()->get()->take(8);
//        $setting = Sitting::all();
        return view('livewire.home-component',['slides'=>$slides,'lproducts'=>$lproducts,'fproducts'=>$fproducts,'populars'=>$populars]);
    }

    public function index()
    {
        $setting = Sitting::all();
        return view('layouts.app',['setting'=> $setting]);
    }

}
