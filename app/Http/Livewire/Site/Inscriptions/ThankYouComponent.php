<?php

namespace App\Http\Livewire\Site\Inscriptions;

use App\Models\Inscription;
use Livewire\Component;
use App\Models\Paiement;
use StephaneAss\Payplus\Pay\PayPlus;

class ThankYouComponent extends Component
{
    public function verify($token)
{
    $token = blank($token) ? $_GET['token'] : trim($token);

    $co = (new PayPlus())->init();

    if ($co->confirm($token)) {
        // Transaction has successed
        // Perform your success logique here

        $inscription_id = $co->getCustomData('first_key');
        $myPaiement = Paiement::where('inscription_id',$inscription_id)->first();
        $myPaiement->statut_id = 3;
        $myPaiement->save();

        $myInscription = Inscription::where('id',$inscription_id)->first();
        $myInscription->statut_id = 3;
        $myInscription->save();
    }else {
        $inscription_id = $co->getCustomData('first_key');
        $myPaiement = Paiement::where('inscription_id',$inscription_id)->first();
        $myPaiement->statut_id = 1;
        $myPaiement->save();

        $myInscription = Inscription::where('id',$inscription_id)->first();
        $myInscription->statut_id = 1;
        $myInscription->save();
    }
}
    public function render()
    {

        return view('livewire.site.inscriptions.thank-you-component')->layout('layouts.thank');
    }
}
