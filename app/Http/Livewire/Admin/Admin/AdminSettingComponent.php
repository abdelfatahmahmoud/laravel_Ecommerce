<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Sitting;
use Livewire\Component;

class AdminSettingComponent extends Component
{
public $setting_id;

    public function deletesetting(){
        $slider = Sitting::find($this->setting_id);
        $slider->delete();
        session()->flash('message','Home setting has ben deleted settings');
    }
    public function render()
    {
        $settings = Sitting::all();
        return view('livewire.admin.admin.admin-setting-component',['settings'=> $settings]);
    }

//    public function index()
//    {
//        $setting = Sitting::all();
//        return view('layouts.app',['setting'=> $setting]);
//    }
}
