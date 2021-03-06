<?php

namespace App\Notifications\Demo;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
        //php artisan notifications:table
        //php artisan migrate
        //return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)->from('admin@myapp.com', 'Admin')
                    ->line('Welcome')
                    ->action('Home', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
            'email' => $notifiable->email,
        ];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
