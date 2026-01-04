<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
    return view('welcome');
    }

    public function contactUs() {
    return view('contattaci');
    }

    public function thankYou(){
            return view('thankYou');
        }

    public function submit(Request $request) {
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $email, $usermessage));

        return redirect()->route('thankYou.page');
    }
}
