<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Mail\Demo\WelcomeEmail;

class Email extends Controller
{
    public function __invoke(Request $request)
    {
        Mail::to("x@g.com")->send(new WelcomeEmail);

        return "emailed";
    }
}
