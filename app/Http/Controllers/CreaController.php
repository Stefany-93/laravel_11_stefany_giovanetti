<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaninoRequest;
use App\Models\Panino;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class CreaController extends Controller implements HasMiddleware
{        
        // public function __construct(){
        //         $this->middleware('auth')->except('index');
        // }
        public static function middleware(): array{
                return [
                        (new Middleware('auth:web')),
                ];
        }     

        public function create(){
                return view('panini.create');
        }

        public function store(PaninoRequest $request){

                $panino = Panino::create([
                        'name'=> $request->name,
                        'description'=> $request->description,
                        'img'=> $request->file('img')->store('public/storage'),
                        'user_id'=> Auth::user()->id
                ]);

                return redirect()->route('home')->with('successMessage', 'Hai inserito correttamente il tuo panino');
        }

}