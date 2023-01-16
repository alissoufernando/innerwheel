<?php

namespace App\Http\Livewire\Site\Inscriptions;

use FedaPay\FedaPay;
use Livewire\Component;
use App\Models\Activite;
use App\Models\Paiement;
use FedaPay\Transaction;
use App\Models\Inscription;
use Illuminate\Http\Request;
use App\Models\OptionHebergement;
use App\Mail\InscriptionComfirmMail;
use Illuminate\Support\Facades\Mail;

class PaimentFedaPayComponent extends Component
{

    public function mount(Request $request)
    {

        $id = $request->id;
        $this->verify($id);
    }

    public function verify($id)
    {
        /* Remplacez VOTRE_CLE_API par votre véritable clé API */
        FedaPay::setApiKey('sk_sandbox_Sv4d_6CevPxK-dX37RDQyWoi');

        /* Précisez si vous souhaitez exécuter votre requête en mode test ou live */
        FedaPay::setEnvironment('sandbox'); //ou setEnvironment('live');

        $transaction = Transaction::retrieve($id);
        // dd($transaction->metadata->paid_customer->lastname);
        if ($transaction->status == "approved") {
            $id_i = explode('_', $transaction->metadata->paid_customer->lastname);
            // dd($id_i['1']);
            $inscription_id = $id_i['1'];
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

            // echo "Paiement effectué";
        }else{
            $id_i = explode('_', $transaction->metadata->paid_customer->lastname);
            $inscription_id = $id_i['1'];
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

        return view('livewire.site.inscriptions.paiment-feda-pay-component')->layout('layouts.thank');
    }
}
