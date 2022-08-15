<?php

namespace App\Mail;

use App\Http\Requests\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class Contact
 * @package App\Mail
 */
class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Sender's name
     *
     * @var mixed
     */
    public $name;

    /**
     * Sender's email
     *
     * @var mixed
     */
    public $email;

    /**
     * Sender's phone
     *
     * @var mixed
     */
    public $phone;

    /**
     * Sender's subject
     *
     * @var mixed
     */
    public $subject;

    /**
     * Sender's message
     *
     * @var mixed
     */
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $request)
    {
        $this->name    = $request->name;
        $this->email   = $request->email;
        $this->phone   = $request->phone;
        $this->subject = $request->subject;
        $this->body    = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->getEmail(), $this->getName())
            ->subject($this->getSubject())
            ->view('emails.contact');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
