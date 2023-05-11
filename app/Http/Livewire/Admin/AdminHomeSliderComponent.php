<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public $slider_id;

    public function deleteslide(){
        $slider = HomeSlider::find($this->slider_id);
        unlink('assets/imgs/slider/'.$slider->image);
        $slider->delete();
        session()->flash('message','Home slider has ben deleted slide');
    }


    public function render()
    {
        $sliders = HomeSlider::orderBy('created_at','ASC')->get();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders]);
    }
}
