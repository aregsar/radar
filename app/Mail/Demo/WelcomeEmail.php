<?php

namespace App\Mail\Demo;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->from('admin@myapp.com', 'Admin')
        ->subject('Welcome')
        ->view('emails.welcome')
        ->text('emails.welcome-txt');
    }
}
