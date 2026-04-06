<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public $arraySandwiches = [
        ['id' => 1, 'name' => 'Colosseo', 'img' => '/media/pecorino.png', 'description' => 'Pagnottina croccante con mortadella tagliata sottile e una pioggia di pecorino stagionato grattugiato.
        Saporito, diretto, per chi ama i sapori rustici.'],
        ['id' => 2, 'name' => 'Estate', 'img' => '/media/mozzarella.png', 'description' => 'Pagnottina croccante con mozzarella fresca appoggiata su un letto di mortadella piegata a ventaglio.
        Semplice, senza fronzoli, il classico panino preparato dalla nonna.'],
        ['id' => 3, 'name' => 'Palermitano', 'img' => '/media/pistacchio.png', 'description' => 'Pagnottina croccante con spesse fette di mortadella  accompagnate da pesto di pistacchio e granella di pistacchio tostato.
        Ricco, aromatico, perfetto per chi ama l’abbinamento iconico mortadella–pistacchio.'],
        ['id' => 4, 'name' => 'Genovese', 'img' => '/media/pomodoro.png', 'description' => 'Pagnottina croccante con fette di mortadella tagliata grossa accompagnate da pesto genovese e pomodorini confit.
        Profumato, mediterraneo, con un equilibrio dolce–salato irresistibile.']
    ];

    public function panini(){
        return view('panini.index', ['sandwiches' => $this->arraySandwiches]);
    }

    public function show($id){
        foreach($this->arraySandwiches as $sandwich){
            if($id == $sandwich['id']){
                return view('panini/show', ['sandwich' => $sandwich]);
            }
        }
    }
}
