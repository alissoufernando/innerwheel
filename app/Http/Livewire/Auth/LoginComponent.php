<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Category;

class LoginComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.login-component',[
        ])->layout('layouts.auth');
    }
}
