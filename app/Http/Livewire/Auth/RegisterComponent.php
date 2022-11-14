<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Category;

class RegisterComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.register-component',[
        ])->layout('layouts.auth');
    }
}
