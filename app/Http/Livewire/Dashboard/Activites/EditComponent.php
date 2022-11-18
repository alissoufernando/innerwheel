<?php

namespace App\Http\Livewire\Dashboard\Activites;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActiviteAction;

class EditComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $contenu;
    public $description;
    public $activites_action_id;


    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['image', 'name','contenu', 'description','activites_action_id']);

    }
    // recuperation de l'element a modifier

    public function mount($id) {
        $this->activites_action_id = $id;
        $myActiviteAction = ActiviteAction::findOrFail($this->activites_action_id);
        $this->name = $myActiviteAction->name;
        $this->image =  $myActiviteAction->image;
        $this->contenu = $myActiviteAction->contenu;
        $this->description = $myActiviteAction->description;
    }
    // Fonction de Modification

    public function updateActiveAction()
    {
            $this->validate([
                'image' =>  'required',
                'name' =>  'required',
                'contenu' =>  'required',
                'description' =>  'required',

            ]);

        $myAvantageOffert = ActiviteAction::findOrFail($this->activites_action_id);
        // Modification et Stockage de l'image dans le dossier storage de public
        $filenameImage = time() . '.' . $this->image->extension();
        $pathImage = $this->image->storeAs(
            'Activites',
            $filenameImage,
            'public'
        );

        $myAvantageOffert->image = $pathImage;
        $myAvantageOffert->contenu = $this->contenu;
        $myAvantageOffert->name = $this->name;
        $myAvantageOffert->description = $this->description;
        $myAvantageOffert->save();

        session()->flash('message', 'Modification effectué avec succès.');
        $this->resetInputFields();

    }
    public function render()
    {
        return view('livewire.dashboard.activites.edit-component');
    }
}
