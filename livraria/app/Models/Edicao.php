<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicao extends Model
{
    use HasFactory;
    //indicar qual a chave primária da tabela Livros
    protected $primaryKey="id_livro";
    
    //esta propriedade não é necessaria
    //mas vai ajudar-nos em situações futuras
    protected $table = "edicoes";
}
