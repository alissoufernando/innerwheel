<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Category;

class ForgotPasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.forgot-password-component',[
        ])->layout('layouts.auth');
    }
}
