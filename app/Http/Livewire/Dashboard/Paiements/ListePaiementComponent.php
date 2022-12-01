<?php

namespace App\Http\Livewire\Dashboard\Paiements;

use Livewire\Component;
use App\Models\Inscription;

class ListePaiementComponent extends Component
{
    public function render()
    {
        $inscriptions = Inscription::where('isDelete', 0)->where('statut_id', 3)->get();
        return view('livewire.dashboard.paiements.liste-paiement-component',[
            'inscriptions' => $inscriptions
        ]);
    }
}
