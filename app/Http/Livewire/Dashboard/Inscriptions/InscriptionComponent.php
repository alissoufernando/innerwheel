<?php

namespace App\Http\Livewire\Dashboard\Inscriptions;

use App\Models\Action;
use App\Models\Statut;
use Livewire\Component;
use App\Models\Paiement;
use App\Models\Inscription;
use Livewire\WithFileUploads;
use App\Mail\InscriptionComfirmMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InscriptionComponent extends Component
{
    use WithFileUploads;

    public $libelle;
    public $piece;
    public $statut_id;
    public $inscription_id;


    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteInscriptions'];

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'statut_id',
        'libelle',
        'piece',
        'inscription_id',

        ]);
    }
    // fonction verification des variables lors de la modification

    public function storeStatut()
    {
        // verification des variables lors de la l'enregistrement



        // verification du variable user_id pour savoir si c'est un enregistrement ou  modification

        $myInscription = Inscription::findOrFail($this->inscription_id);
        $myInscription->statut_id = 3;
        $myInscription->save();

        if($myInscription->paiement->piece)
        {


        }else
        {
            if($this->piece)
            {

                $mypaiement = Paiement::findOrFail($this->inscription_id);

                $filename = time() . '.' . $this->piece->extension();
                $path = $this->piece->storeAs(
                    'Pieces',
                    $filename,
                    'public'
                );
                $mypaiement->piece = $path;
                $mypaiement->save();
            }
        }

        $myAction = new Action();
        $myAction->user_id = Auth::user()->id;
        $myAction->inscription_id = $myInscription->id;
        $myAction->save();

        // verification du variable user_id pour envoir message d'enregistrement ou  de modification

        if ($this->inscription_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {

            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        // mettre ajout

        $this->emit('storeInscription');
        Mail::to($myInscription->individu->email)->send( new InscriptionComfirmMail($myInscription->individu->nom, $myInscription->individu->email,));
        // vider les champs apres l'enregistrement ou la modification
        $this->resetInputFields();
        return redirect()->route('admininscription');
        
    }

    // recuperation de l'element a modifier
    public function getElementById($id)
    {
        $this->inscription_id = $id;
        $myInscription = Inscription::findOrFail($this->inscription_id);
        $this->statut_id = $myInscription->statut_id;
        $this->piece = $myInscription->paiement->piece;



    }
    // recuperation de l'element a supprimer
    public function deleteInscription($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }
    // suppression de l'élement recuperer
    public function deleteInscriptions()
    {
        $myInscription = Inscription::findOrFail($this->deleteIdBeingRemoved);
        $myInscription->isDelete = 1;
        $myInscription->save();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Cette inscription à été supprimer']);
        // return redirect()->route('admin.user-index');

    }
    public function render()
    {
        $inscriptions = Inscription::where('isDelete', 0)->get();

        $statuts = Statut::where('isDelete', 0)->get();
        return view('livewire.dashboard.inscriptions.inscription-component',[
            'inscriptions' => $inscriptions,
            'statuts' => $statuts,
        ]);
    }
}
