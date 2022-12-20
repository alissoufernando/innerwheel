<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;

class ChangePassWordComponent extends Component
{
    use PasswordValidationRules;
    public $email;
    public $passwordA;
    public $password;
    public $passwordN;
    public $passwordCN;
    public $vrai = 0;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();

        $this->reset(['passwordA','email','passwordN','passwordCN','password']);
    }

    public function ChangePassword()
    {


            $this->validate([
                'passwordA' => ['required',],
                'password' => ['required',],
                'passwordN' =>  ['required'],
                'passwordCN' => ['required',],
                'email' => ['required',],
            ]);
        if ($this->email) {
            $myUser = User::where('email',$this->email)->first();
        }
            $this->password = $myUser->password;
            if($this->passwordA)
            {
                if(password_verify($this->passwordA,$this->password))
                {

                    $myUser->password = Hash::make($this->passwordCN);
                    $myUser->save();
                    session()->flash('message', 'Modification effectuée avec succès.');

                    $this->resetInputFields();
                    $this->emit('ChangePassword');
                }

            }



        // $myUser->email = $this->email;

    }

    public function render()
    {
        if($this->passwordA)
        {
            if ($this->email) {
                $myUser = User::where('email',$this->email)->first();
                $this->password = $myUser->password;
            }
            if(password_verify($this->passwordA,$this->password))
            {
                // dd(password_verify($this->passwordA,$this->password));
                $this->vrai = 1;
            }
        }



        return view('livewire.auth.change-pass-word-component')->layout('layouts.auth');
    }
}
