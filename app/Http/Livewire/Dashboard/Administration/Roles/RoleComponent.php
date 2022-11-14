<?php

namespace App\Http\Livewire\Dashboard\Administration\Roles;

use App\Models\Role;
use Livewire\Component;

class RoleComponent extends Component
{
    public $role_id;
    public $name;

    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteRoles'];

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'name',
        'role_id',
        ]);
    }
    // fonction verification des variables lors de la modification
    public function updated($fields)
    {
        if ($this->role_id) {
            $this->validateOnly($fields, [
                'name' => 'required',
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' => 'required',
            ]);
        }
    }
    public function storeRole()
    {
        // verification des variables lors de la l'enregistrement

        if ($this->role_id) {
            $this->validate([
                'name' => 'required',

            ]);
        } else {
            $this->validate([
                'name' => 'required',
            ]);
        }

        $myRole = new Role();
        // verification du variable role_id pour savoir si c'est un enregistrement ou  modification

        if ($this->role_id) {
            $myRole = Role::findOrFail($this->role_id);
        }
        $myRole->name = $this->name;
        $myRole->save();

        // verification du variable role_id pour envoir message d'enregistrement ou  de modification

        if ($this->role_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {

            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        // vider les champs apres l'enregistrement ou la modification
        $this->resetInputFields();
        // mettre ajout
        $this->emit('storeRole');

        return redirect()->route('admin.role-index');
    }

    // recuperation de l'element a modifier
    public function getElementById($id)
    {
        $this->role_id = $id;
        $myRole = Role::findOrFail($this->role_id);
        $this->name = $myRole->name;
    }
    // recuperation de l'element a supprimer
    public function deleteRole($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }
    // suppression de l'élement recuperer
    public function deleteRoles()
    {
        $myRole = Role::findOrFail($this->deleteIdBeingRemoved);
        $myRole->isDelete = 1;
        $myRole->save();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Ce Rôle à été supprimer']);
        return redirect()->route('admin.role-index');

    }
    public function render()
    {
        $roles = Role::where('isDelete', 0)->get();
        return view('livewire.dashboard.administration.roles.role-component',[
            "roles" => $roles,
        ]);
    }
}
