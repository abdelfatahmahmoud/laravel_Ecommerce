<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $is_popular;
    public $image;

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fildes){
        $this->validateOnly($fildes,[
            'name'=>'required',
            'slug'=>'required',
            'image'=>'required',
//            'is_popular'=>'required'

        ]);

    }

    public function categoryStore(){

    $this->validate([
        'name'=>'required',
        'slug'=>'required',
        'image'=>'required',
//            'is_popular'=>'required'
    ]);
        $category = new Category();
        $category->name =$this->name;
        $category->slug =$this->slug;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('category',$imageName);
        $category->image = $imageName;
        $category->is_popular = $this->is_popular;

        $category->save();
        session()->flash('message','category has been created successfully ');

    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}
