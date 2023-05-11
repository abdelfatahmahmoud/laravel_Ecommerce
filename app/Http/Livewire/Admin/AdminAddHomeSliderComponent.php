<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $link;
    public $status;
    public $image;

//    public function generatetoptitle(){
//        $this->top_title = Str::top_title($this->title);
//    }

    public function addslider(){
        $this->validate([
            'top_title'=>'required',
            'title'=>'required',
            'sub_title'=>'required',
            'link'=>'required',
            'offer'=>'required',
            'status'=>'required',
            'image'=>'required'


        ]);

        $slider = new HomeSlider();
        $slider->top_title = $this->top_title;
        $slider->title = $this->title;
        $slider->sub_title = $this->sub_title;
        $slider->link = $this->link;
        $slider->offer = $this->offer;
        $slider->status = $this->status;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider',$imageName);
        $slider->image = $imageName;

        $slider->save();
        session()->flash('message','home slider has been successfully');

    }


    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component');
    }
}
