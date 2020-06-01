<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Email extends Controller
{
    public function __invoke(Request $request)
    {
        return "email demo";
    }
}
