<?php

namespace App\Http\Livewire\Dashboard\Inscriptions;

use App\Models\Inscription;
use Livewire\Component;

class InscriptionComponent extends Component
{
    public $libelle;
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
        'inscription_id',

        ]);
    }
    // fonction verification des variables lors de la modification
    public function updated($fields)
    {
        if ($this->inscription_id) {
            $this->validateOnly($fields, [
                'statut_id' => 'required',
            ]);
        } else {
            $this->validateOnly($fields, [
                'statut_id' => 'required',
            ]);
        }
    }
    public function storeUser()
    {
        // verification des variables lors de la l'enregistrement

        if ($this->inscription_id) {
            $this->validate([
                'statut_id' => 'required',

            ]);
        } else {
            $this->validate([
                'statut_id' => 'required',
            ]);
        }

        $myInscription = new Inscription();
        // verification du variable user_id pour savoir si c'est un enregistrement ou  modification

        if ($this->inscription_id) {
            $myInscription = Inscription::findOrFail($this->inscription_id);
        }
        $myInscription->statut_id = $this->statut_id;
        $myInscription->save();

        // verification du variable user_id pour envoir message d'enregistrement ou  de modification

        if ($this->inscription_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {

            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        // vider les champs apres l'enregistrement ou la modification
        $this->resetInputFields();
        // mettre ajout
        $this->emit('storeInscription');

        // return redirect()->route('admin.user-index');
    }

    // recuperation de l'element a modifier
    public function getElementById($id)
    {
        $this->inscription_id = $id;
        $myInscription = Inscription::findOrFail($this->inscription_id);
        $this->statut_id = $myInscription->statut_id;
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
        return view('livewire.dashboard.inscriptions.inscription-component',[
            'inscriptions' => $inscriptions,
        ]);
    }
}
