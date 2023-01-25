<?php

namespace App\Http\Livewire\Dashboard\Activites;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActiviteAction;
use Illuminate\Support\Facades\Storage;

class EditComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $contenu;
    public $file;
    public $description;
    public $activites_action_id;
    public $array_full=[];



    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['image', 'name','contenu', 'description','activites_action_id','file']);

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

        $myActiviteAction = ActiviteAction::findOrFail($this->activites_action_id);
        // Modification et Stockage de l'image dans le dossier storage de public

        if($myActiviteAction->image != $this->image)
        {
            if($this->file) {
                $file = $this->file;
                $filenamePDF = uniqid().'.'.$file->getClientOriginalExtension();
                $file->storeAs('activity_files', $filenamePDF, 'real_public');
            }
            $this->uploadOne();
            array_push($this->array_full,$filenamePDF);
            $myActiviteAction->image = collect($this->array_full)->implode(',');
        }else{
            $myActiviteAction->image = $this->image;
        }
        $myActiviteAction->contenu = $this->contenu;
        $myActiviteAction->name = $this->name;
        $myActiviteAction->description = $this->description;
        $myActiviteAction->save();

        // Storage::deleteDirectory('livewire-tmp');
        $this->resetInputFields();
        session()->flash('message', 'Modification effectué avec succès.');

    }
    public function uploadOne()
    {
        if (!empty($this->image)) {
            $array_full = array();
            foreach ($this->image as $full){
                $images = $full;
                $imageName = uniqid().'.'.$images->getClientOriginalExtension();
                $images->storeAs('activity_files', $imageName, 'real_public');

                array_push($array_full, $imageName);

                array_push($array_full, $imageName);

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
        return view('livewire.dashboard.activites.edit-component');
    }
}
