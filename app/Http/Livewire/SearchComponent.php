<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;


use Livewire\Component;
use Livewire\WithPagination;
use Cart;
class SearchComponent extends Component
{
//    use WithFileUploads;
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = 'Default Sorting';

    public $main_value=0;
    public $max_value=1000;

    public $q;
    public $search_trem;

    public function mount(){
        $this->fill(request()->only('q'));
        $this->search_trem = '%'.$this->q . '%';
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');

        return redirect()->route('shop.cart');
    }
    public function changePageSize($size){
        $this->pageSize=$size;
    }
    public function cahengrOrderBy($order){
        $this->orderBy=$order;
    }
    public function render()
    {
        if ($this->orderBy == 'Price: Low to High'){
            $products = Product::where('name','like',$this->search_trem)->whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        elseif ($this->orderBy == 'Price: High to Low'){
            $products = Product::where('name','like',$this->search_trem)->whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        elseif ($this->orderBy == 'Sort By Newness'){
            $products = Product::where('name','like',$this->search_trem)->whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where('name','like',$this->search_trem)->whereBetween('regular_price',[$this->main_value,$this->max_value])->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name','ASC')->get();
        $nproducts = Product::latest()->take(4)->get();
        return view('livewire.search-component',['products'=>$products, 'categories' => $categories,'nproducts'=>$nproducts]);
    }
}
