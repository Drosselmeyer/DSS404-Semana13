<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    //

    public function index(){
        return view('welcome', [ 'lista' => Lista::all() ] );
        
    }
    public function guardarItem(Request $request){
        //\Log::info(json_encode($request->all()));
        $nuevoItem = new Lista;
        $nuevoItem->nombre = $request->item;
        $nuevoItem->pendiente = 1;
        $nuevoItem->save();

        return redirect('/');
    }    

}
