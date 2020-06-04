<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Mail\Demo\WelcomeEmail;
use App\Mail\Demo\WelcomeEmailMd;

use App\Notifications\Demo\Welcome;
use App\User;

use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class Email extends Controller
{
    //mail dashboard localhost:8025
    public function __invoke(Request $request)
    {

        $user = User::where('email',Auth::user()->email)->first();

        //========================
        //emails

        $email = new WelcomeEmail;

        $emailmd = new WelcomeEmailMd;

        //will queue if email implements ShouldQueue contract
        //Mail::to(Auth::user()->email)->send($email);

        //send using the default queue connection
        //if sync queue connection behaves same as send($email).
        Mail::to(Auth::user()->email)->queue($email);


        //========================
        //Notifications

        //$user->notify(new Welcome);

        //Notification::send($user, new Welcome);

        //Notification::route('mail', Auth::user()->email)->notify(new Welcome);

        return $user;
    }
}
