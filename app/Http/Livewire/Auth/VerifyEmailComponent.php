<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Category;

class VerifyEmailComponent extends Component
{
    public function render()
    {

        return view('livewire.auth.verify-email-component',[
        ])->layout('layouts.auth');
    }
}
