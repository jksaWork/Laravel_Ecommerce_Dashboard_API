<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestLivewire extends Component
{
    public function render()
    {
        connectify('success', 'Connection Found', 'Success Message Here');
        notify()->success('Himohammed ', 'welcome to codelapan');
        drakify('success');
        smilify('success', 'You are successfully reconnected');
        emotify('success', 'You are awesome, your data was successfully created');
        return view('livewire.test-livewire')->layout('layouts.theme');
    }
}
