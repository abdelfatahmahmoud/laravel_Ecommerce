<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Sitting;
use Livewire\Component;

class AdminEditSettingComponent extends Component
{
    public $setting_id;
    public $phone;
    public $fb_link;
    public $tw_link;
    public $insta;
    public $email;

    public function mount($setting_id){
        $seting = Sitting::find($this->setting_id);
        $this->setting_id = $seting->id;
        $this->phone = $seting->phone;
        $this->fb_link = $seting->fb_link;
        $this->tw_link = $seting->tw_link;
        $this->insta = $seting->insta;
        $this->email = $seting->email;
    }


    public function updatesetting(){
        $this->validate([
            'phone'=>'required',
            'fb_link'=>'required',
            'tw_link'=>'required',
            'insta'=>'required',
            'email'=>'required'
        ]);
        $setting = Sitting::find($this->setting_id);
        $setting->phone =$this->phone;
        $setting->fb_link =$this->fb_link;
        $setting->tw_link = $this->tw_link;
        $setting->insta = $this->insta;
        $setting->email = $this->email;

        $setting->save();
        session()->flash('message',' setting has been updated successfully ');
    }

    public function render()
    {
        return view('livewire.admin.admin.admin-edit-setting-component');
    }
}
