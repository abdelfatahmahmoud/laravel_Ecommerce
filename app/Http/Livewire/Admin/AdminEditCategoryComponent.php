<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $is_popular;
    public $newimage;

    public function mount($category_id)
    {
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->is_popular = $category->is_popular;
        $this->image = $category->image;
    }
public function generateSlug(){
        $this->slug = Str::slug($this->name);
}

    public function updated($fildes){
        $this->validateOnly($fildes,[
            'name'=>'required',
            'slug'=>'required',
             'is_popular'=>'required',
            'image'=>'required'
        ]);

    }

    public function updateCategory(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
             'is_popular'=>'required',
            'image'=>'required'
        ]);

        $category = Category::find($this->category_id);
        $category->name =$this->name;
        $category->slug =$this->slug;
        if ($this->newimage){
            unlink('assets/imgs/category/'.$category->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('category',$imageName);
            $category->image = $imageName;
        }
        $category->is_popular =$this->is_popular;
        $category->save();
        session()->flash('message','category has been Updated successfully ');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component');
    }
}
