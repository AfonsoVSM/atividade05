<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
class LivrosController extends Controller
{
    
public function index(){
    $livros = Livro::paginate(4);
    /*$livros = Livro::all()->sortbydesc('idl');*/
    
    return view ('livros.index', [
        'livros'=>$livros
    ]);
}
    public function show (Request $request){
        $idLivro = $request->id;
        
       // $livro = Livro::findOrFail($idLivro);
        
         $livro = Livro::where('id_livro',$idLivro)->with('autor')->first();
        
        return view ('livros.show',[
            'livro'=>$livro
        ]);
       
    }
}

