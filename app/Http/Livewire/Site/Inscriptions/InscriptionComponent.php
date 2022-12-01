<?php

namespace App\Http\Livewire\Site\Inscriptions;

use App\Models\Club;
use App\Models\Lieu;
use App\Models\Pays;
use App\Models\Poste;
use App\Models\Tarif;
use Livewire\Component;
use App\Models\Activite;
use App\Models\Individu;
use App\Models\Paiement;
use App\Models\Hebergement;
use App\Models\Inscription;
use App\Models\ModeArrivee;
use App\Models\ModePaiement;
use App\Mail\InscriptionMail;
use Livewire\WithFileUploads;
use App\Models\OptionHebergement;
use App\Mail\InscriptionAdminMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use StephaneAss\Payplus\Pay\PayPlus;

class InscriptionComponent extends Component
{
    use WithFileUploads;
    public $nom;
    public $prenoms;
    public $club_id;
    public $poste_id;
    public $posteInner;
    public $adresse;
    public $tel;
    public $email;
    public $tarif_id;
    public $pay_id;
    public $pays;
    public $club;
    public $date_arrivee;
    public $date_depart;
    public $mode_arrivee_id;
    public $mode_arrivee;
    public $placeFini;
    public $place;
    public $lieu_id;
    public $hebergement_id;
    public $optionHebergement_id;
    public $Mode_paiement_id;
    public $Mode_paiement;
    public $activite_id;
    public $montant_total = 0;
    public $inscription_id_1;
    public $Dactivites;
    public $Dclub;
    public $Dtarifs, $DoptionHebergements, $Dhebergements;
    public $piece;
    public $poste;
    public $lieux;
    public $indicatif;


    public $compagnon, $compagnons;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }
    // incrementer pour l'etape suivante
    public function increaseStep()
    {
        // dd('ok');
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        // faire les calculs pour l'étape 3 du formulaire
        if($this->currentStep == 3)
        {
            // dd('ok');
            // if($this->activite_id)
            // {
                $this->montant_total = 50000;
                $this->Dactivites = Activite::where('id',$this->activite_id)->first();
                $this->Dclub = Club::where('id',$this->club_id)->first();
                $this->Mode_paiement = ModePaiement::where('id',$this->Mode_paiement_id)->first();
                $this->mode_arrivee = ModeArrivee::where('id',$this->mode_arrivee_id)->first();
                $this->posteInner = Poste::where('id',$this->poste_id)->first();
                $this->Dhebergements = Hebergement::where('id',$this->hebergement_id)->first();

                if($this->optionHebergement_id)
                {
                    $this->lieux = Lieu::where('id',$this->lieu_id)->first();
                    $this->Dtarifs = Tarif::where('id',$this->tarif_id)->first();
                    $this->DoptionHebergements = OptionHebergement::where('id',$this->optionHebergement_id)->first();

                    $this->montant_total += $this->DoptionHebergements->prix;
                }
        }

        if($this->currentStep > $this->totalSteps)
        {
            $this->currentStep = $this->totalSteps;
        }
    }
    // decrementer pour l'etape precedente

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
    // control des input
    public function validateData()
    {
        if($this->currentStep == 1)
        {

            if($this->pay_id == 12)
            {
                $this->validate([
                    'pays'=>'required',
                    'club'=>'required',
                    'nom'=>'required',
                    'prenoms'=>'required',
                    'adresse'=>'required',
                    'poste_id'=>'required',
                    'indicatif'=>'required',
                    'tel'=>'required',
                    'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
                ]);
            }else{
                $this->validate([
                    'nom'=>'required',
                    'pay_id'=>'required',
                    'prenoms'=>'required',
                    'club_id'=>'required',
                    'poste_id'=>'required',
                    'adresse'=>'required',
                    'tel'=>'required',
                    'indicatif'=>'required',
                    'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
                ]);
            }
        }elseif($this->currentStep == 2)
        {
            if($this->hebergement_id == 2)
            {
                $this->validate([
                    'mode_arrivee_id'=>'required',
                    'date_arrivee'=>'required',
                    'date_depart'=>'required',
                    'Mode_paiement_id'=>'required',
                    'activite_id'=>'required',
                    'hebergement_id'=>'required',
                ]);
            }else
            {
                $this->validate([
                    'tarif_id'=>'required',
                    'lieu_id'=>'required',
                    'mode_arrivee_id'=>'required',
                    'date_arrivee'=>'required',
                    'date_depart'=>'required',
                    'Mode_paiement_id'=>'required',
                    'activite_id'=>'required',
                    'hebergement_id'=>'required',
                    'optionHebergement_id'=>'required',

                ]);
            }

            // $tarifs = Tarif::where('isDelete', 0)->where('id', $this->tarif_id)->first();

            // if($tarifs->place == 0)
            // {
            //     $this->placeFini = 1;
            // }
        }elseif($this->currentStep == 3)
        {

        }

    }
    // fonction pour le paiement

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
        if($this->optionHebergement_id)
        {

            $DoptionHebergements = OptionHebergement::where('id',$this->optionHebergement_id)->first();

            $this->montant_total += $DoptionHebergements->prix;
        }

        $co->addItem($DoptionHebergements->libelle, 1, $DoptionHebergements->prix, $DoptionHebergements->prix, "Les frais d'hébergements");
        $total_amount=100;
        $co->setTotalAmount($total_amount);
        $co->setDescription("Inscription de la inner Wheel 2023");
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
            'optionHebergement_id',
            'nom',
            'prenoms',
            'club_id',
            'pay_id',
            'poste_id',
            'adresse',
            'tel',
            'email',
            'tarif_id',
            'mode_arrivee_id',
            'date_arrivee',
            'date_depart',
            'montant_total',
            'indicatif',
            'piece',
            'poste',
            'club',
            'pays',
            'compagnons',
            'lieu_id'
        ]);

    }

    // Fonction de l'enregistrement

    public function storeinscription()
    {
        // enregistrer individu
        $myIndividu = new Individu();
        $myIndividu->nom = $this->nom;
        $myIndividu->prenoms = $this->prenoms;
        if($this->pay_id == 12)
        {
            $myIndividu->club = $this->club;
            $myIndividu->pays = $this->pays;
        }else{

            $myIndividu->club_id = $this->club_id;
        }

        if($this->poste_id == 25)
        {
            $myIndividu->poste = $this->poste;
        }else{

            $myIndividu->poste_id = $this->poste_id;
        }

        $myIndividu->adresse = $this->adresse;
        $myIndividu->tel = $this->indicatif.$this->tel;
        $myIndividu->email = $this->email;
        $myIndividu->save();
        // recupere la dernier enregistrement
        $myIndividu = Individu::latest()->first();
        // enregistrer une inscription
        $myInscription = new Inscription();
        $myInscription->individu_id = $myIndividu->id;
        if($this->piece)
        {
            $filename = time() . '.' . $this->piece->extension();
            $path = $this->piece->storeAs(
                'Pieces',
                $filename,
                'public'
            );
        }

        if($this->hebergement_id == 1)
        {
            $tarifs = Tarif::where('isDelete', 0)->where('id', $this->tarif_id)->first();
            $tarifs->place =$tarifs->place - 1;
            $tarifs->save();
            $myInscription->option_hebergement_id = $this->optionHebergement_id;
        }
        if($this->compagnons)
        {
            $myInscription->compagnons = $this->compagnons;
        }

        $myInscription->statut_id = 2;
        $myInscription->mode_arrivee_id = $this->mode_arrivee_id;
        $myInscription->date_arrivee = $this->date_arrivee;
        $myInscription->date_depart = $this->date_depart;
        $myInscription->montant_total = $this->montant_total;
        $myInscription->save();
        // enregistrer un paiement
        $myPaiement = new Paiement();
        $myInscription = Inscription::latest()->first();
        $this->inscription_id_1 = $myInscription->id;
        $myPaiement->inscription_id = $myInscription->id;
        $myPaiement->mode_paiement_id = $this->Mode_paiement_id;
        if($this->piece)
        {

            $myPaiement->piece = $path;
        }
        $myPaiement->statut_id = 2;
        $myPaiement->save();

        // envoie de mail
        if($this->Mode_paiement_id == 1)
        {
            $this->currentStep = 1;
            session()->flash('message', 'Inscription effectuée avec succès.');
            // return redirect()->to($URL_pay);
            foreach (['adresseemail@innerwheel.com','adresseemaila@innerwheel.com','adresseemailaa@innerwheel.com'] as $recipient) {
                Mail::to($recipient)->send( new InscriptionAdminMail($this->nom, $this->email,));
            }

            Mail::to($this->email)->send( new InscriptionMail($this->nom, $this->email,));
            $this->resetInputFields();
        }else{
            foreach (['adresseemail@innerwheel.com','adresseemaila@innerwheel.com','adresseemailaa@innerwheel.com'] as $recipient) {
                Mail::to($recipient)->send( new InscriptionAdminMail($this->nom, $this->email,));
            }

            Mail::to($this->email)->send( new InscriptionMail($this->nom, $this->email,));
            $this->sendRequest();
            $this->resetInputFields();

        }
    }


    public function changeClub()
    {
        $this->club_id = 0;
    }


    public function render()
    {
        // verification si c'es double ou simple
        if($this->optionHebergement_id)
        {
            $optionHebergement = OptionHebergement::where('id',$this->optionHebergement_id)->first();
            $libelleHebergement = explode(' ',$optionHebergement->libelle);
            $recherche = array_search("Double",$libelleHebergement);
            if($recherche === false)
            {
                $this->compagnon = 0;
            }else{
                $this->compagnon = 1;

            }
            //dd($this->compagnon);
        }
        $payss = Pays::where('isDelete', 0)->get();
        $postes = Poste::where('isDelete', 0)->get();
        $paysIndicatifs = Pays::where('isDelete', 0)->where('indicatif', '!=' , "0000")->get();
        $activites = Activite::where('isDelete', 0)->get();
        $lieus = Lieu::where('isDelete', 0)->where('hebergement_id', $this->hebergement_id)->get();
        $optionHebergements = OptionHebergement::where('isDelete', 0)->where('tarif_id', $this->tarif_id)->get();
        // dd($optionHebergements);

        $tarifs = Tarif::where('isDelete', 0)->where('lieu_id', $this->lieu_id)->get();

        $mode_arriveess = ModeArrivee::where('isDelete', 0)->get();
        $hebergements = Hebergement::where('isDelete', 0)->get();
        $clubs = Club::where('isDelete', 0)->where('pay_id', $this->pay_id)->get();
        $modepaiments = ModePaiement::where('isDelete', 0)->get();

        return view('livewire.site.inscriptions.inscription-component',[
            'mode_arriveess' => $mode_arriveess,
            'tarifs' => $tarifs,
            'lieus' => $lieus,
            'postes' => $postes,
            'clubs' => $clubs,
            'hebergements' => $hebergements,
            'activites' => $activites,
            'modepaiments' => $modepaiments,
            'payss' => $payss,
            'paysIndicatifs' => $paysIndicatifs,
            'optionHebergements' => $optionHebergements,
        ])->layout('layouts.site');
    }
}
