<?php

namespace App\Http\Livewire\Dashboard\Administration\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserComponent extends Component
{
    public $name;
    public $email;
    public $password = 123456789;
    public $user_id;


    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteUsers'];

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'name',
        'email',
        'password',
        'user_id',

        ]);
    }
    // fonction verification des variables lors de la modification
    public function updated($fields)
    {
        if ($this->user_id) {
            $this->validateOnly($fields, [
                'name' => 'required',
                'email' => 'required',
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' => 'required',
                'email' => 'required',
            ]);
        }
    }
    public function storeUser()
    {
        // verification des variables lors de la l'enregistrement

        if ($this->user_id) {
            $this->validate([
                'name' => 'required',
                'email' => 'required',

            ]);
        } else {
            $this->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
        }

        $myAgent = new User();
        // verification du variable user_id pour savoir si c'est un enregistrement ou  modification

        if ($this->user_id) {
            $myAgent = User::findOrFail($this->user_id);
        }

        $myAgent->name = $this->name;
        $myAgent->email = $this->email;
        $myAgent->password = Hash::make($this->password);

        $myAgent->save();

        // verification du variable user_id pour envoir message d'enregistrement ou  de modification

        if ($this->user_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {

            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        // vider les champs apres l'enregistrement ou la modification
        $this->resetInputFields();
        // mettre ajout
        $this->emit('storeUser');

        return redirect()->route('admin.user-index');
    }

    // recuperation de l'element a modifier
    public function getElementById($id)
    {
        $this->agent_id = $id;
        $myAgent = User::findOrFail($this->agent_id);
        $this->name = $myAgent->name;
        $this->email = $myAgent->email;
    }
    // recuperation de l'element a supprimer
    public function deleteUser($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }
    // suppression de l'élement recuperer
    public function deleteUsers()
    {
        $myService = User::findOrFail($this->deleteIdBeingRemoved);
        $myService->isDelete = 1;
        $myService->save();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Cet utilisateur à été supprimer']);
        return redirect()->route('admin.user-index');

    }
    public function render()
    {
        $users = User::where('isDelete', 0)->get();
        return view('livewire.dashboard.administration.user.user-component',[
            'users' => $users,
        ]);
    }
}
