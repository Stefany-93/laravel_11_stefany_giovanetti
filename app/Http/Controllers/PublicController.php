<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaninoRequest;
use App\Mail\ContactMail;
use App\Models\Panino;
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

        public function menu(){
                return view('menu');
        }

        public function crea(){
                return view('crea');
        }

        public function creaPanino(PaninoRequest $request) {

                $panino = new Panino();
                $panino->name = $request->name;
                $panino->description = $request->description;
                if ($request->hasFile('img')) {
                        $panino->img = $request->file('img')->store('images', 'public');
                } else {
                        $panino->img = 'images/no-img.png';
                }
                $panino->save();

                return redirect()->route('panini.index');
        }

        public function index(){

                $paninos = Panino::all();
                return view('panini.index', ['paninos'=> $paninos]);
        }

        public function submit(Request $request) {
                $name = $request->input('username');
                $email = $request->input('email');
                $usermessage = $request->input('message');

                Mail::to($email)->send(new ContactMail($name, $email, $usermessage));

                return redirect()->route('thankYou.page');
        }
}
