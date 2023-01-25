<?php

namespace App\Http\Livewire\Dashboard\Activites;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActiviteAction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AddComponent extends Component
{
    use WithFileUploads;
    public $image;
    public $name;
    public $contenu;
    public $file;
    public $description;
    public $array_full=[];

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['image', 'name','contenu', 'description','file']);

    }
    // Fonction de l'enregistrement

    public function storeActiveAction(Request $request)
    {
        // verification des variables lors de la l'enregistrement

            $this->validate([
                'contenu' =>  'required',
                'name' =>  'required',
                'image' =>  'required',
                'file' =>  'required',
                'description' =>  'required',

            ]);

            $myActiviteAction = new ActiviteAction();
            if($this->file)
            {
                //https://laracasts.com/discuss/channels/livewire/how-to-store-images-in-public-folder-not-storage-folder-using-livewire
                $file = $this->file;
                $fileName = gmdate("YmdHis").'.'.$file->getClientOriginalExtension();
                $file->storeAs('activity_files', $fileName, 'real_public');
                array_push($this->array_full,$fileName);
            }
            if($this->image){

                $image = $this->image[0];
                $imageName = gmdate("YmdHis").'.'.$image->getClientOriginalExtension();
                $image->storeAs('activity_files', $imageName, 'real_public');
                array_push($this->array_full,$imageName);
            }
            //$this->uploadOne();

            // dd($this->array_full);
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
                    'Activites',
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
