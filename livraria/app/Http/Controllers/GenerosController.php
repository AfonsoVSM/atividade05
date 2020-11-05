<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
class GenerosController extends Controller
{
    public function index(){
     $generos = Genero::paginate(4);
    /*$generos = Genero::all()->sortbydesc('idg');*/
    
    return view ('generos.index', [
        'generos'=>$generos
    //
         ]);
    }
       public function show (Request $request){
        $idGenero = $request->id;
        
        $Genero = Genero::findOrFail($idGenero);
        
        return view ('generos.show',[
            'genero'=>$genero
        ]);
        }
    }
