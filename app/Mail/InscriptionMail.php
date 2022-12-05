<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InscriptionMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $name, $email;
    public $subject = "nouvelle";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $email)
    {
        $this->name = $nom;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('livewire.site.inscriptions.emails.inscription-mail')->with([
            'email' => $this->email,
            'name' => $this->name,
        ]);
    }
}
