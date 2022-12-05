<?php

namespace App\Http\Livewire\Site\Inscriptions;

use App\Mail\InscriptionComfirmMail;
use Livewire\Component;
use App\Models\Paiement;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use StephaneAss\Payplus\Pay\PayPlus;

class ThankYouComponent extends Component
{

    public function mount(Request $request)
    {
        $token= $request->token;
        // dd($request->token);
        $this->verify($token);
    }

    public function verify($token)
    {
        // dd($token);
        $token = blank($token) ? $_GET['token'] : trim($token);

        $co = (new PayPlus())->init();
        if ($co->confirm($token)) {
            // Transaction has successed
            // Perform your success logique here

            $inscription_id = $co->getCustomData('first_key');
            $myPaiement = Paiement::where('inscription_id',$inscription_id)->first();
            if($myPaiement)
            {
                $myPaiement->statut_id = 3;
                $myPaiement->save();
            }

            $myInscription = Inscription::where('id',$inscription_id)->first();
            if($myInscription)
            {
                $myInscription->statut_id = 3;
                $myInscription->save();
            }
            Mail::to($myInscription->individu->email)->send( new InscriptionComfirmMail($myInscription->individu->nom, $myInscription->individu->email));

            // dd('ok');
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
