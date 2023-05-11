<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $slider_id;
    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $link;
    public $status;
    public $image;
    public $newimage;
    public function mount($slider_id){
        $slider = HomeSlider::find($this->slider_id);
        $this->slider_id = $slider->id;
        $this->top_title = $slider->top_title;
        $this->title = $slider->title;
        $this->sub_title = $slider->sub_title;
        $this->offer = $slider->offer;
        $this->link = $slider->link;
        $this->status = $slider->status;
        $this->image = $slider->image;
    }

    public function updatehomeslider(){
        $this->validate([
            'top_title'=>'required',
            'title'=>'required',
            'sub_title'=>'required',
            'link'=>'required',
            'offer'=>'required',
            'status'=>'required',
            'image'=>'required'
        ]);
        $slider =  HomeSlider::find($this->slider_id);
        $slider->top_title = $this->top_title;
        $slider->title = $this->title;
        $slider->sub_title = $this->sub_title;
        $slider->link = $this->link;
        $slider->offer = $this->offer;
        $slider->status = $this->status;
        if ($this->newimage){
            unlink('assets/imgs/slider/'.$slider->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('slider',$imageName);
            $slider->image = $imageName;
        }
        $slider->save();
        session()->flash('message','home slider has been updated');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component');
    }
}
