<?php

namespace App\Http\Livewire\Dashboard\Paiements;

use App\Models\Club;
use App\Models\Poste;
use Livewire\Component;
use App\Models\Inscription;

class ListePaiementComponent extends Component
{
    public function render()
    {
        $inscriptions = Inscription::where('isDelete', 0)->where('statut_id', 3)->get();

        foreach($inscriptions as $inscription)
        {
            if($inscription->individu->club_id)
            {

                $club = Club::where('id',$inscription->individu->club_id)->first();
                $inscription->individu->club = $club->libelle;

            }
            if($inscription->individu->poste_id)
            {
                // dd($inscription->individu->poste_id);
                $poste = Poste::where('id',$inscription->individu->poste_id)->first();
                $inscription->individu->poste = $poste->libelle;
            }
        }


        return view('livewire.dashboard.paiements.liste-paiement-component',[
            'inscriptions' => $inscriptions
        ]);
    }
}
