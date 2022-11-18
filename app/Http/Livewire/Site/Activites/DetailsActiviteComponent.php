<?php

namespace App\Http\Livewire\Site\Activites;

use Livewire\Component;

class DetailsActiviteComponent extends Component
{
    public function render()
    {
        return view('livewire.site.activites.details-activite-component')->layout('layouts.site');
    }
}
