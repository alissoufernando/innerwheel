<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class Welcome extends Component
{
    public $name, $email, $comment,$subject;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['name', 'email', 'comment', 'subject',]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'subject' => 'required'
        ]);
    }
    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'subject' => 'required'
        ]);

        // Mail::to(['vente@centraledumobilier.com','infos@centraledumobilier.com','sav@centraledumobilier.com'])->send( new ContactForm($this->name, $this->email,$this->comment,$this->subject));

        session()->flash('message', 'Merci, Votre message a été bien envoyé.');
        $this->resetInputFields();
        $this->emit('sendMessage');
    }
    public function render()
    {
        return view('livewire.site.welcome')->layout('layouts.site');
    }
}
