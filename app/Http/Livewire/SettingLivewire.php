<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SettingLivewire extends Component
{
    public $name, $email, $phone_1, $phone_2, $location;
    public function SaveSetting(){
        // dd('hello');
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_1'=> 'required',
            'phone_2' => 'required',
            'location' => 'required'
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
    }
    public function render()
    {
        // dd(setting()->get('jksa'));
        // dd(Setting('jksa'));
    //    dd(setting()->get('name'));

        return view('livewire.setting-livewire')->layout('layouts.master');
    }
}
