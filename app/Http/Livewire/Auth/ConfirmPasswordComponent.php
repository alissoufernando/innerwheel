<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Category;

class ConfirmPasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.confirm-password-component',[
        ])->layout('layouts.auth');
    }
}
