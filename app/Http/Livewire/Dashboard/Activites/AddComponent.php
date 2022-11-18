<?php

namespace App\Http\Livewire\Dashboard\Activites;

use App\Models\ActiviteAction;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $contenu;
    public $description;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['image', 'name','contenu', 'description']);

    }
    // Fonction de l'enregistrement

    public function storeActiveAction()
    {
        // verification des variables lors de la l'enregistrement

            $this->validate([
                'contenu' =>  'required',
                'name' =>  'required',
                'image' =>  'required',
                'description' =>  'required',

            ]);

        $myActiviteAction = new ActiviteAction();
        // Modification et Stockage de l'image dans le dossier storage de public

        $filenameImage = time() . '.' . $this->image->extension();
        $pathImage = $this->image->storeAs(
            'Activites',
            $filenameImage,
            'public'
        );

        $myActiviteAction->image = $pathImage;
        $myActiviteAction->contenu = $this->contenu;
        $myActiviteAction->name = $this->name;
        $myActiviteAction->description = $this->description;
        $myActiviteAction->save();

       session()->flash('message', 'Enregistrement effectué avec succès.');
       $this->resetInputFields();

    }
    public function render()
    {
        return view('livewire.dashboard.activites.add-component');
    }
}
