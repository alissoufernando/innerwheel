<?php

namespace App\Http\Livewire\Site\Activites;

use Livewire\Component;
use App\Models\ActiviteAction;

class ActiviteComponent extends Component
{
    public function render()
    {
        $activiteActions = ActiviteAction::where('isDelete',0)->get();
        return view('livewire.site.activites.activite-component',[
            'activiteActions' => $activiteActions,
        ])->layout('layouts.site');
    }
}
