<?php

namespace App\Http\Livewire\Dashboard\Activites;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActiviteAction;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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

    public function storeActiveAction()
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
            $filenamePDF = "";
            if($this->file)
            {
                $fileTmpNamePDF = $this->file->getPathname();
                // dd($this->file);
                //         $file = $request->file('file');
                // $path = $file->store('uploads');
                // Storage::move($path, 'public/'.$path);
                $filenamePDF = time() . '.' . $this->file->extension();
                // $pathImage = $this->file->storeAs(
                //     'ActivitesFile',
                //     $filenamePDF,
                //     'public'
                // );
                // Définir l'emplacement où le fichier doit être enregistré
                // $directory = __DIR__.'/public/innerwheel/Activites';
                $directory = public_path('innerwheel\ActivitesFile');
                chmod(public_path('innerwheel'), 0777);
                chmod($directory, 0777);
                $fileDestination = $directory.$filenamePDF;
                // Enregistrer le fichier dans le dossier spécifié
                // dd($fileTmpNamePDF, $fileDestination);
                // Storage::put($fileDestination, file_get_contents($this->file));
                Storage::move($fileTmpNamePDF, $fileDestination);
                // move_uploaded_file($fileTmpNamePDF, $fileDestination);
                // if (!move_uploaded_file($fileTmpNamePDF, $fileDestination)) {
                //     throw new FileException('Error moving file to destination.');
                // }
                    dd('ok');
            }
            $this->uploadOne();
            array_push($this->array_full,$filenamePDF);
            // dd($this->array_full);
            $myActiviteAction->image = collect($this->array_full)->implode(',');
            $myActiviteAction->contenu = $this->contenu;
            $myActiviteAction->name = $this->name;
            $myActiviteAction->description = $this->description;
            $myActiviteAction->save();

            // Storage::deleteDirectory('livewire-tmp');
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
                $fileTmpName = $images->getPathname();
                // dd($fileTmpName);
                $filename_full =  'activites-' .uniqid() . '.' . $images->getClientOriginalExtension();
                // $pathImage = $images->storeAs(
                //     'Activites',
                //     $filename_full,
                //     'public'
                // );
                // Définir l'emplacement où le fichier doit être enregistré
                // $directory = __DIR__.'/public/innerwheel/ActivitesFile/';
                $directory = public_path('innerwheel/ActivitesFile/');
                chmod($directory, 0777);
                $fileDestination = $directory . $filename_full;
                // Enregistrer le fichier dans le dossier spécifié
                move_uploaded_file($fileTmpName, $fileDestination);
                if (!move_uploaded_file($fileTmpName, $fileDestination)) {
                    throw new FileException('Error moving file to destination.');
                }

                array_push($array_full, $filename_full);

            }
            $this->array_full=$array_full;

        }
    }
    // public function deleteOne()
    // {
    //     Storage::disk('public')->delete("/Activites/$this->image");
    // }
    public function render()
    {
        return view('livewire.dashboard.activites.add-component');
    }
}
