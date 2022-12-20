<?php

namespace App\Http\Livewire\Dashboard\Hebergement;

use Livewire\Component;
use App\Models\Inscription;

class HebergementComponent extends Component
{

    public function render()
    {
        $inscriptions = Inscription::where('isDelete', 0)->get();
        // foreach($inscriptions as $inscription)
        // {
        //     dd($inscription->option_hebergement);

        // }
        return view('livewire.dashboard.hebergement.hebergement-component',[
            'inscriptions' => $inscriptions,
        ]);
    }
}
