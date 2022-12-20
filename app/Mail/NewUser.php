<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUser extends Mailable
{
    use Queueable, SerializesModels;
    protected $name, $email, $password;
    public $subject = "Nouveau utilisateur";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $password)
    {

        $this->name = $name;
        $this->email = $email;
        $this->password = $password;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd('ok');

        return $this->subject($this->subject)->view('livewire.site.inscriptions.emails.newUser')->with([
            'email' => $this->email,
            'name' => $this->name,
            'password' => $this->password,

        ]);
    }
}
