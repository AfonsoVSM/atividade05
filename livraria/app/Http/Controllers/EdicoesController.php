<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edicao;
class EdicoesController extends Controller
{
     public function index(){
     $edicoes = Edicao::paginate(4);
    /*$autores = Autor::all()->sortbydesc('ida');*/
    
    return view ('edicoes.index', [
        'edicoes'=>$edicoes
    
         ]);
         }
        public function show (Request $request){
        $idEdicao = $request->id;
        
        $Edicao = Edicao::findOrFail($idEdicao);
        
        return view ('edicoes.show',[
            'edicao'=>$edicao
        ]);
}
    
}
