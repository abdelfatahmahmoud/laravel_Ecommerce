<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Sitting;
use Livewire\Component;

class AdminAddSettingComponent extends Component
{

    public $phone;
    public $fb_link;
    public $tw_link;
    public $insta;
    public $email;

    public function updated($fildes){
        $this->validateOnly($fildes,[
            'phone'=>'required',
            'fb_link'=>'required',
            'tw_link'=>'required',
            'insta'=>'required',
            'email'=>'required'

        ]);

    }

    public function settingStore(){

        $this->validate([
            'phone'=>'required',
            'fb_link'=>'required',
            'tw_link'=>'required',
            'insta'=>'required',
            'email'=>'required'
        ]);
        $setting = new Sitting();
        $setting->phone =$this->phone;
        $setting->fb_link =$this->fb_link;
        $setting->tw_link = $this->tw_link;
        $setting->insta = $this->insta;
        $setting->email = $this->email;

        $setting->save();
        session()->flash('message','setting has been created successfully ');

    }

    public function render()
    {
        return view('livewire.admin.admin.admin-add-setting-component');
    }
}
