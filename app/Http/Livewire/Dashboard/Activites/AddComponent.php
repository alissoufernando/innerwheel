<?php

namespace App\Http\Livewire\Dashboard\Activites;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActiviteAction;
use Illuminate\Support\Facades\Storage;

class AddComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $contenu;
    public $description;
    public $array_full=[];

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
            $this->uploadOne();
            $myActiviteAction->image = collect($this->array_full)->implode(',');
            $myActiviteAction->contenu = $this->contenu;
            $myActiviteAction->name = $this->name;
            $myActiviteAction->description = $this->description;
            $myActiviteAction->save();

            Storage::deleteDirectory('livewire-tmp');
            $this->resetInputFields();

            session()->flash('message', 'Enregistrement effectué avec succès.');

            back();


        // Modification et Stockage de l'image dans le dossier storage de public

    }
    public function uploadOne()
    {
        if (!empty($this->image)) {
            $array_full = array();
            foreach ($this->image as $full){
                $images = $full;
                $filename_full =  'activites-' .uniqid() . '.' . $images->getClientOriginalExtension();
                $pathImage = $images->storeAs(
                    'activites',
                    $filename_full,
                    'public'
                );

                array_push($array_full, $filename_full);

            }
            $this->array_full=$array_full;

        }
    }
    public function deleteOne()
    {
        Storage::disk('public')->delete("/Activites/$this->image");
    }
    public function render()
    {
        return view('livewire.dashboard.activites.add-component');
    }
}
