<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerProfile extends Component
{   public $editMyProfile = false;
    public $f_name, $l_name,$phone,$email, $gender;
    public function EditProfile(){
        $this->editMyProfile = true;
    }
    public function mount(){
        $this->f_name = explode(' ' , auth()->user()->name)[0];
        $this->l_name = explode(' ' , auth()->user()->name)[1] ?? '';
        $this->phone  = auth()->user()->phone;
        $this->email = auth()->user()->email;
        $this->gender = auth()->user()->gender;
    }

    public function UpdateProfile(){
        $validaor =  $this->validate(
            [
                'f_name' => 'required',
                'l_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'gender' => 'nullable',
            ]);

            $validaor['name'] = $this->f_name . ' ' . $this->l_name;
            $customer = Customer::find(auth()->user()->id)->update($validaor);
            notify()->success('You Account Has Register Now  You Can Shop And Rateing The Product');
            $this->emit('RemoveFromCart' , 'Your Profile Was Updated Successfuly');
            // dd('Saved Sccuess');
        }
    public function render()
    {
        return view('livewire.customer-profile')->layout('layouts.customer');
    }
}
