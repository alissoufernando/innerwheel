<?php

namespace App\Http\Livewire\Site\Inscriptions;

use App\Models\Club;
use App\Models\Tarif;
use Livewire\Component;
use App\Models\Activite;
use App\Models\Individu;
use App\Models\Hebergement;
use App\Models\Inscription;
use App\Models\ModeArrivee;
use App\Models\ModePaiement;
use App\Models\Paiement;
use Illuminate\Support\Facades\Http;
use StephaneAss\Payplus\Pay\PayPlus;

class InscriptionComponent extends Component
{
    public $nom;
    public $prenoms;
    public $club_id;
    public $fonction;
    public $adresse;
    public $tel;
    public $email;
    public $tarif_id;
    public $date_arrivee;
    public $date_depart;
    public $mode_arrivee_id;
    public $hebergement_id;
    public $Mode_paiement_id;
    public $activite_id;
    public $montant_total = 0;
    public $inscription_id_1, $Dactivites, $myInscription, $Dclub, $Dtarifs;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }
    public function increaseStep()
    {
        // dd('ok');
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep == 3)
        {
            // dd('ok');
            // if($this->activite_id)
            // {
                $this->montant_total = 50000;
                $this->Dactivites = Activite::where('id',$this->activite_id)->first();
                $this->Dclub = Club::where('id',$this->club_id)->first();

                // dd($this->Dactivites);

                $this->montant_total += $this->Dactivites->prix;

                $this->Dtarifs = Tarif::where('id',$this->tarif_id)->first();
                // dd($Dtarifs);
                $this->montant_total += $this->Dtarifs->prix;
                // }
                // dd($this->Dclub,$this->Dactivites,$this->Dtarifs);
                // $this->currentStep = $this->totalSteps;
        }

        if($this->currentStep > $this->totalSteps)
        {
            // // dd('ok');
            // // if($this->activite_id)
            // // {
            //     $this->montant_total = 50000;
            //     $this->Dactivites = Activite::where('id',$this->activite_id)->first();
            //     $this->Dclub = Club::where('id',$this->club_id)->first();

            //     // dd($this->Dactivites);

            //     $this->montant_total += $this->Dactivites->prix;

            //     $this->Dtarifs = Tarif::where('id',$this->tarif_id)->first();
            //     // dd($Dtarifs);
            //     $this->montant_total += $this->Dtarifs->prix;
            //     // }
            //     dd($this->Dclub,$this->Dactivites,$this->Dtarifs);
                $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep--;
        if($this->currentStep < 1)
        {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if($this->currentStep == 1)
        {
            $this->validate([
                'nom'=>'required',
                'prenoms'=>'required',
                'club_id'=>'required',
                'fonction'=>'required',
                'adresse'=>'required',
                'tel'=>'required',
                'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }elseif($this->currentStep == 2)
        {
            $this->validate([
                'tarif_id'=>'required',
                'mode_arrivee_id'=>'required',
                'date_arrivee'=>'required',
                'date_depart'=>'required',
                'Mode_paiement_id'=>'required',
                'activite_id'=>'required',
                'hebergement_id'=>'required',
            ]);
        }elseif($this->currentStep == 3)
        {

        }

    }

    //  all variables for payment
    // public $siteName = "INNERWHEEL";
    // public $siteURL = "http://127.0.0.1:8000";
    // public $description  = "Description du contenu de la facture";
    // public $URL= "https://app.payplus.africa/pay/v01/redirect/checkout-invoice/create";
    // public $URL_callback = "http://127.0.0.1:8000/inscription";
    // public $key = "9WTO1AST69CTB11BM";
    // public $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hcHAiOiI5MiIsImlkX2Fib25uZSI6IjMiLCJkYXRlY3JlYXRpb25fYXBwIjoiMjAxOS0xMi0yMCAxMTo0OTowNyJ9.blg6LB50P0UKSOBf_dSoaoQYNTjNQCd6Isty36UBskM";


    public function sendRequest()
    {
        $co = (new PayPlus())->init();
        $activites = Activite::where('isDelete', 0)->get();
        foreach($activites as $activite)
        {
            if($activite->obligatoire === 1)
            {
                $this->montant_total += $activite->prix;
                $co->addItem($activite->libelle, 1, 25000, 25000, "Les frais obligatoires");
            }
        }

        $Dtarifs = Tarif::where('id',$this->tarif_id)->first();
        $this->montant_total += $Dtarifs->prix;

        $co->addItem($Dtarifs->libelle, 1, $Dtarifs->prix, $Dtarifs->prix, "Les frai d'hebergements");
        $total_amount=100;
        $co->setTotalAmount($total_amount);
        $co->setDescription("Inscription de la innerWheel 2023");
        $co->addCustomData('first_key',$this->inscription_id_1);

        // démarrage du processus de paiement
        // envoi de la requete
        if($co->create()) {

            // Requête acceptée, alors on redirige le client vers la page de validation de paiement
            return redirect()->to($co->getInvoiceUrl());
        }else{
            // Requête refusée, alors on affiche le motif du rejet
            return [
                "succes" => false,
                "message" => "$co->response_text"
            ];
        }
        // $siteName = "INNERWHEEL";
        // $siteURL = "http://127.0.0.1:8000";
        // $description  = "Description du contenu de la facture";
        // $URL= "https://app.payplus.africa/pay/v01/redirect/checkout-invoice/create";
        // $URL_callback = "http://127.0.0.1:8000/inscription";
        // $data = [
        //     "commande" => [
        //       "invoice" => [
        //         "items" => [
        //           [
        //             "name" => "Inscription",
        //             "description"=> "Inscription",
        //             "quantity"=> 1,
        //             "unit_price"=> 25000,
        //             "total_price"=> 25000
        //           ],
        //           [
        //             "name" => "Gala",
        //             "description"=> "gala",
        //             "quantity"=> 1,
        //             "unit_price"=> 25000,
        //             "total_price"=> 25000
        //           ]
        //         ],
        //         // "total_amount"=> $this->montant_total,
        //         "total_amount"=> 100,
        //         "description"=> "Paiement",
        //         "devise"=> "XOF",
        //         // "customer"=> "22995185044",
        //         // "customer_firstname"=> "Arnaud",
        //         // "customer_lastname"=> "LOKONON",
        //         // "customer_email"=> "fiflokonon@gmail.com",
        //         // "external_id "=> "",
        //         // "otp"=> "",
        //         // "network" => ""
        //       ],
        //       "store" => [
        //         "name" => $siteName,
        //         "website_url" => $siteURL,
        //       ],
        //       "actions" => [
        //         "cancel_url" => "",
        //         "return_url" => $URL_callback,
        //         "callback_url" => $URL_callback
        //       ],
        //       "custom_data" => [
        //         "transction_id"=> "4520"
        //       ]
        //     ]
        //   ];
        // $key = "9WTO1AST69CTB11BM";
        // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hcHAiOiI5MiIsImlkX2Fib25uZSI6IjMiLCJkYXRlY3JlYXRpb25fYXBwIjoiMjAxOS0xMi0yMCAxMTo0OTowNyJ9.blg6LB50P0UKSOBf_dSoaoQYNTjNQCd6Isty36UBskM";
        // $headers = [
        //     "Authorization" => "Bearer".$token,
        //     "ApiKey" => $key,
        //     'content-Type' => "application/json"
        // ];

        // // $response = Http::withHeaders([
        // //     'Authorization' => 'Bearer'.$token,
        // //     'ApiKey' => $key,
        // //     'content-Type' => 'application/json'
        // // ])->post($URL, $data);

        // $response = Http::withToken($token)->withHeaders([
        //     'Apikey' => $key
        // ])->post("https://app.payplus.africa/pay/v01/redirect/checkout-invoice/create", $data);

        // #return json_encode($response);
        // return $response['response_text'];
    }

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
            'activite_id',
            'Mode_paiement_id',
            'hebergement_id',
            'nom',
            'prenoms',
            'club_id',
            'fonction',
            'adresse',
            'tel',
            'email',
            'tarif_id',
            'mode_arrivee_id',
            'date_arrivee',
            'date_depart',
            'montant_total',
        ]);

    }

    // Fonction de l'enregistrement

    public function storeinscription()
    {

        $myIndividu = new Individu();

        $myIndividu->nom = $this->nom;
        $myIndividu->prenoms = $this->prenoms;
        $myIndividu->club_id = $this->club_id;
        $myIndividu->fonction = $this->fonction;
        $myIndividu->adresse = $this->adresse;
        $myIndividu->tel = $this->tel;
        $myIndividu->email = $this->email;
        $myIndividu->save();

        $myIndividu = Individu::where('email',$this->email)->first();

        $myInscription = new Inscription();


        $myInscription->individu_id = $myIndividu->id;
        $myInscription->tarif_id = $this->tarif_id;
        $myInscription->statut_id = 2;
        $myInscription->mode_arrivee_id = $this->mode_arrivee_id;
        $myInscription->date_arrivee = $this->date_arrivee;
        $myInscription->date_depart = $this->date_depart;
        $myInscription->montant_total = $this->montant_total;
        $myInscription->save();

        $myPaiement = new Paiement();
        $myInscription = Inscription::latest()->first();
        $this->inscription_id_1 = $this->myInscription->id;
        $myPaiement->inscription_id = $myInscription->id;
        $myPaiement->mode_paiement_id = $this->Mode_paiement_id;
        $myPaiement->statut_id = 2;

        $this->sendRequest();
        // dd($URL_pay);
        session()->flash('message', 'Enregistrement effectué avec succès.');
        // return redirect()->to($URL_pay);
       $this->resetInputFields();
    }

    public function changeTarif()
    {
        $this->tarif_id = 0;
    }
    public function render()
    {
        $activites = Activite::where('isDelete', 0)->get();
        $tarifs = Tarif::where('isDelete', 0)->where('hebergement_id', $this->hebergement_id)->get();
        $mode_arrivee = ModeArrivee::where('isDelete', 0)->get();
        $hebergements = Hebergement::where('isDelete', 0)->get();
        $clubs = Club::where('isDelete', 0)->get();
        $modepaiments = ModePaiement::where('isDelete', 0)->get();



        return view('livewire.site.inscriptions.inscription-component',[
            'mode_arrivee' => $mode_arrivee,
            'tarifs' => $tarifs,
            'clubs' => $clubs,
            'hebergements' => $hebergements,
            'activites' => $activites,
            'modepaiments' => $modepaiments,
        ])->layout('layouts.site');
    }
}
