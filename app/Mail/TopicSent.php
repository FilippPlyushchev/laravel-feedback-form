<?php

namespace App\Mail;

use App\Contact;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TopicSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The topic instance.
     *
     * @var Contact
     */
    public $topic;

    /**
     * The manger instance.
     *
     * @var User
     */
    public $manager;

    /**
     * Create a new message instance.
     * @param Contact $topic
     * @param $manager
     */
    public function __construct(Contact $topic, $manager)
    {
        $this->topic = $topic;
        $this->manager = $manager;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.topic');
    }
}
