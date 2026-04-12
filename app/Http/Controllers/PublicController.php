<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Panino;

class PublicController extends Controller
{
        public function homepage() {
                return view('welcome');
        }

        public function contactUs() {
                return view('contattaci');
        }

        public function index(){
                $panini = Panino::all();
                return view('panini.index', compact('panini'));
        }

        public function show(Panino $panino){
                return view('panini.show', compact('panino'));
        }

}