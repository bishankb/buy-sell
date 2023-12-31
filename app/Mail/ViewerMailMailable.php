<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ViewerMailMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $viewerData = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($data)
    {
        $this->viewerData = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.viewer-mail')
                    ->subject('New message from Contact Us Form');
    }
}
