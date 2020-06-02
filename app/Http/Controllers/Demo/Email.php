<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Mail\Demo\WelcomeEmail;
use App\Mail\Demo\WelcomeEmailMd;

class Email extends Controller
{
    //mail dashboard localhost:8025
    public function __invoke(Request $request)
    {
        $email = new WelcomeEmail;

        //Mail::to("x@g.com")->send($email);

        $email = new WelcomeEmailMd;

        Mail::to("x@g.com")->send($email);

        return $email;
    }
}
