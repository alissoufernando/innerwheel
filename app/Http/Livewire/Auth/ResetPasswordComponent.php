<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Category;

class ResetPasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.reset-password-component',[
        ])->layout('layouts.auth');
    }
}
