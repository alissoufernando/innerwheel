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
    public $inscription_id;

    public function mount(Request $request,$id)
    {
        $this->inscription_id = $id;
        // dd($this->inscription_id);
        $id_transacion = $request->id;
        $id_transacion = $request->id;
        $this->verify($id_transacion);
    }

    public function verify($id)
    {
        /* Remplacez VOTRE_CLE_API par votre véritable clé API */
        FedaPay::setApiKey('sk_live_l_kcHD5MptuZQnpw4zDDeAKc');
        // FedaPay::setApiKey('sk_sandbox_2DHL5GNx62oij9f0cmgFnf-9');

        /* Précisez si vous souhaitez exécuter votre requête en mode test ou live */
        FedaPay::setEnvironment('live'); //ou setEnvironment('live');
        // FedaPay::setEnvironment('sandbox'); //ou setEnvironment('live');

        $transaction = Transaction::retrieve($id);

        // dd($transaction->metadata);
        if ($transaction->status == "approved") {
            $myPaiement = Paiement::where('inscription_id',$this->inscription_id)->first();
            if($myPaiement)
            {
                $myPaiement->statut_id = 3;
                $myPaiement->save();
            }

            $myInscription = Inscription::where('id',$this->inscription_id)->first();
            if($myInscription)
            {
                $myInscription->statut_id = 3;
                $myInscription->save();
            }
            Mail::to($myInscription->individu->email)->send( new InscriptionComfirmMail($myInscription->individu->nom, $myInscription->individu->email));

            // echo "Paiement effectué";
        }else{

            $myPaiement = Paiement::where('inscription_id',$this->inscription_id)->first();
            $myPaiement->statut_id = 1;
            $myPaiement->save();

            $myInscription = Inscription::where('id',$this->inscription_id)->first();
            $myInscription->statut_id = 1;
            $myInscription->save();
        }
    }


    public function render()
    {

        return view('livewire.site.inscriptions.paiment-feda-pay-component')->layout('layouts.thank');
    }
}
