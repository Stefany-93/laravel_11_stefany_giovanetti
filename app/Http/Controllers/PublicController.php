<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{
        public function homepage() {
                return view('welcome');
        }

        public function contactUs() {
                return view('contattaci');
        }

}