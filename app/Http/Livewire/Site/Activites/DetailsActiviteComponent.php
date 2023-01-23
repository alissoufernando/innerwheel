<?php

namespace App\Http\Livewire\Site\Activites;

use Livewire\Component;
use App\Models\ActiviteAction;

class DetailsActiviteComponent extends Component
{
    public $activiteAction_id;
    public function mount($id)
    {
        $this->activiteAction_id = $id;
    }

    public function render()
    {
        $activiteAction = ActiviteAction::where('isDelete', 0)->where('id', $this->activiteAction_id)->first();
        // $images = explode(",",$activiteAction->image);
        //         dd($images);
        return view('livewire.site.activites.details-activite-component',[
            'activiteAction' => $activiteAction,
        ])->layout('layouts.site');
    }
}
