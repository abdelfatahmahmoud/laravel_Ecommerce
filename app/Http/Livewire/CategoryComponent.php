<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
class CategoryComponent extends Component
{
//    use WithFileUploads;
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = 'Default Sorting';
public $slug;


    public $main_value=0;
    public $max_value=1000;


    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }
    public function changePageSize($size){
        $this->pageSize=$size;
    }
    public function cahengrOrderBy($order){
        $this->orderBy=$order;
    }

    public function mount($slug){
        $this->slug=$slug;
    }
    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if ($this->orderBy == 'Price: Low to High'){
            $products = Product::where('category_id',$category_id)->whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        elseif ($this->orderBy == 'Price: High to Low'){
            $products = Product::where('category_id',$category_id)->whereBetween('regular_price',[$this->main_value,$this->max_value])->rderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        elseif ($this->orderBy == 'Sort By Newness'){
            $products = Product::where('category_id',$category_id)->whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where('category_id',$category_id)->whereBetween('regular_price',[$this->main_value,$this->max_value])->paginate($this->pageSize);
        }

//        if ($this->orderBy == 'Price: Low to High'){
//            $products = Product::whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('regular_price','ASC')->paginate($this->pageSize);
//        }
//        elseif ($this->orderBy == 'Price: High to Low'){
//            $products = Product::whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('regular_price','DESC')->paginate($this->pageSize);
//        }
//        elseif ($this->orderBy == 'Sort By Newness'){
//            $products = Product::whereBetween('regular_price',[$this->main_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
//        }
//        else{
//            $products = Product::whereBetween('regular_price',[$this->main_value,$this->max_value])->paginate($this->pageSize);
//        }

        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['products'=>$products, 'categories' => $categories,'category_name'=>$category_name]);
    }
}
