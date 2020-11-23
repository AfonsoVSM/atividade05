<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    //indicar qual a chave primária da tabela Livros
    protected $primaryKey="id_livro";
    
    //esta propriedade não é necessaria
    //mas vai ajudar-nos em situações futuras
    protected $table = "livros";
    
    
    public function autor(){
        return $this->belongsTo('App\Models\Autor', 'id_autor');
    }
}
