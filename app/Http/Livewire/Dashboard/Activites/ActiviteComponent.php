<?php

namespace App\Http\Livewire\Dashboard\Activites;

use App\Models\ActiviteAction;
use Livewire\Component;

class ActiviteComponent extends Component
{

    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteActiviteActions'];


    // recuperation de l'element a supprimer
    public function deleteActiviteAction($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }
    // suppression de l'élement recuperer
    public function deleteActiviteActions()
    {
        $myActiviteAction = ActiviteAction::findOrFail($this->deleteIdBeingRemoved);
        $myActiviteAction->isDelete = 1;
        $myActiviteAction->save();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Cete activité à été supprimer']);


    }
    public function render()
    {
        $activite_actions = ActiviteAction::where('isDelete', 0)->get();
        
        return view('livewire.dashboard.activites.activite-component',[
            'activite_actions' => $activite_actions,
        ]);
    }
}
