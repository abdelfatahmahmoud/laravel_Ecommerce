<?php

namespace App\Http\Livewire;


use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use Cart;
class DetailsComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function stores($product_id, $product_name, $product_price)
    {
       $nn = Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');

       session()->flash('success_message', 'Item added in Cart');

        return redirect()->route('shop.cart');
    }


    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $rproducts = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();
        $categories = Category::orderBy('name','ASC')->get();
//        dd($product);
        return view('livewire.details-component',['product'=>$product,'rproducts'=>$rproducts,'nproducts'=>$nproducts,'categories'=>$categories]);
    }
}
