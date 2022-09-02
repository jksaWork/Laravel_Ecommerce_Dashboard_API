<?php

namespace App\Http\Livewire;

use Livewire\Component;
use  Livewire\WithFileUploads;
class SettingLivewire extends Component
{
    use WithFileUploads;
    public $name, $email, $phone_1, $phone_2, $location, $app_name, $app_image;
    public function SaveSetting(){
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_1'=> 'required',
            'phone_2' => 'required',
            'location' => 'required',
            'app_name'=> 'required',
        ]);
        setting($valid)->save();
        notify()->success('Seeting Wasa Saved');
        // dd('saved');
    }

    public function mount(){
        $this->name = setting()->get('name');
        $this->email = setting()->get('email');
        $this->phone_1 = setting()->get('phone_1');
        $this->phone_2 = setting()->get('phone_2');
        $this->location = setting()->get('location');
        $this->app_name = setting()->get('app_name');
    }
    public function render()
    {
        // dd(setting()->get('jksa'));
        // dd(Setting('jksa'));
    //    dd(setting()->get('name'));

        return view('livewire.setting-livewire')->layout('layouts.master');
    }
}
