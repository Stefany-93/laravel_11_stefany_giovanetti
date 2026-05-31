<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SandwichRequest;
use App\Http\Requests\SandwichEditRequest;
use App\Models\Sandwich;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SandwichController extends Controller implements HasMiddleware
{        

        public static function middleware(): array{
                return [
                        (new Middleware('auth'))->only(['create', 'index']),
                ];
        }  

        public function index(){
                $sandwiches = Sandwich::all();
                return view('sandwich.index', compact('sandwiches'));
        }

        public function create(){
                return view('sandwich.create');
        }

        public function store(SandwichRequest $request){

                $imgPath = $request->file('img')->store('images', 'public');

                $sandwich = Sandwich::create([
                        'name'=> $request->name,
                        'description'=> $request->description,
                        'img'=> $imgPath,
                        'user_id'=> Auth::user()->id
                ]);

                return redirect()->route('home')->with('successMessage', 'Hai inserito correttamente il tuo panino');

        }

        public function sandwiches(){

                return view('sandwich.index', ['sandwiches' => $this->arraySandwiches]);

        }

        public function show(Sandwich $sandwich){

                return view('sandwich.show', compact('sandwich'));

        }

        public function edit(Sandwich $sandwich){

                return view('sandwich.edit', compact('sandwich'));
        
        }

        public function update(SandwichEditRequest $request, Sandwich $sandwich){

                $sandwich->update([
                        $sandwich->name = $request->name,
                        $sandwich->description = $request->description,
                ]);

                if($request->img){
                        $sandwich->update([
                                $sandwich->img = $request->file('img')->store('public/images')
                        ]);
                }

                return redirect()->route('home')->with('successMessage', 'Hai modificato correttamente il tuo panino');

        }

        public function destroy(Sandwich $sandwich){

                $sandwich->delete();

                return redirect()->route('home')->with('successMessage', 'Hai eliminato correttamente il tuo panino');

        }

}

