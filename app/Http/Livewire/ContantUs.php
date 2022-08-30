<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContantUs extends Component
{
    public $subject , $name , $email, $message;
    public function Contact(){
        $contacntData = $this->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        \App\Models\Contant::create($contacntData);
        $this->emit('RemoveFromCart' , 'Your Message Was Send');
        $this->subject = $this->name = $this->email = $this->message = '';


    }
    public function render()
    {

        return view('livewire.contant-us' )->layout('layouts.theme');
    }
}
