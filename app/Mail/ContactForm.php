<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    protected $name, $email, $comment;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $comment, $subject)
    {
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->email)->subject($this->subject)->view('livewire.site.emails')->with([
            'email' => $this->email,
            'name' => $this->name,
            'comment' => $this->comment,
        ]);
    }
}
