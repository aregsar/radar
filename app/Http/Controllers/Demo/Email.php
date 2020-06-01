<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;



class Email extends Controller
{
    public function __invoke(Request $request)
    {
        Mail::to("");

        return "email demossssssss";
    }
}
