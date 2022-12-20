<?php

namespace App\Http\Livewire\Dashboard\Administration\User;

use App\Models\Role;
use App\Models\User;
use App\Mail\NewUser;
use Livewire\Component;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Actions\Fortify\PasswordValidationRules;

class UserComponent extends Component
{
    use PasswordValidationRules;
    public $name;
    public $email;
    public $password;
    public $user_id;
    public $myUserE, $roless =[], $tableau =[];
    protected $listeners = ['deleteConfirmation' => 'deleteUsers'];
    public $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }


    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        if($this->user_id){
            $this->reset(['name','email','user_id']);
        }
        $this->reset(['name','email','password']);
    }


    public function updated($fields)
    {
        if ($this->user_id) {
            $this->validateOnly($fields, [
                'name' =>  ['required'],
                'roless' =>  ['required'],
                'email' =>  ['required'],
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' =>  ['required'],
                'roless' =>  ['required'],
                'email' =>  ['required'],
            ]);
        }

    }
    public function saveUser()
    {
        // dd($this->rolessU);:
        if ($this->user_id) {

            $this->validate([
                'name' => ['required',],
                'roless' =>  ['required'],
                'email' => ['required',],
            ]);
            // dd('ok');
        } else {
            $this->validate([
                'name' =>  ['required'],
                'roless' =>  ['required'],
                'email' =>  ['required'],
            ]);
        }
        $myUser = new User();

        if ($this->user_id) {
            $myUser = User::findOrFail($this->user_id);
        }

        if($this->user_id) {

            $myUser->name = $this->name;
            $myUser->email = $this->email;
            $myUser->save();
            $userRole = Role::whereIn('id', $this->roless)->get();
            foreach($userRole as $userRoles)
            {
                array_push($this->tableau,$userRoles->id);
            }
            $utilisateurR = RoleUser::where('user_id',$this->user_id)->first();
            $utilisateurR->role_id = implode(',',$this->tableau);
            $utilisateurR->save();

            return redirect()->route('admin.user-index');

        } else {
            $myUser->name = $this->name;
            $myUser->email = $this->email;
            $this->password = $this->generate_string($this->permitted_chars, 20);
            $myUser->password = Hash::make($this->password);
            $myUser->save();
            Mail::to($this->email)->send( new NewUser($this->name, $this->email,$this->password));
            $myUserN = User::where('email' ,$this->email)->first();
            $userRole = Role::whereIn('id', $this->roless)->get();
            foreach($userRole as $userRoles)
            {
                array_push($this->tableau,$userRoles->id);
            }
            $utilisateurR = new RoleUser();
            $utilisateurR->user_id = $myUserN->id;
            $utilisateurR->role_id = implode(',',$this->tableau);
            $utilisateurR->save();


            return redirect()->route('admin.user-index');
        }



        if ($this->user_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('saveUser');
    }

    public function getElementById($id)
    {
        $this->user_id = $id;
        $this->myUserE = User::findOrFail($this->user_id);
        $myRoleE = RoleUser::where('user_id',$this->user_id)->first();

        $this->roless = explode(",", $myRoleE->role_id);
        // dd($this->roless);

        $this->name = $this->myUserE->name;
        $this->email = $this->myUserE->email;
    }


    public function deleteUser($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteUsers()
    {
        $myUser = User::findOrFail($this->deleteIdBeingRemoved);
        $myUser->isDelete = 1;
        $myUser->save();
        $this->dispatchBrowserEvent('deleted',['message' => 'Cet utilisateur à été supprimer']);

    }
    public function render()
    {
        $users = User::where('isDelete', 0)->get();
        $roles = Role::where('isDelete', 0)->get();
        return view('livewire.dashboard.administration.user.user-component',[
            'users' => $users,
            'roles' => $roles,
        ]);
    }
}
